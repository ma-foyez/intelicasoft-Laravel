<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Store a newly created contact message
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'project_type' => 'nullable|string|in:residential,commercial,industrial,infrastructure',
            'budget_range' => 'nullable|string|in:under_50k,50k_100k,100k_500k,500k_1m,over_1m',
            'timeline' => 'nullable|string|in:asap,1_3_months,3_6_months,6_12_months,over_1_year',
        ]);

        // Create contact message
        $contactMessage = ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'project_type' => $request->project_type,
            'budget_range' => $request->budget_range,
            'timeline' => $request->timeline,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Send email notification (optional)
        try {
            // You can implement email notification here
            // Mail::to(config('mail.contact_email'))->send(new ContactNotification($contactMessage));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            Log::error('Failed to send contact notification: ' . $e->getMessage());
        }

        return redirect()->back()->with('success',
            'Thank you for your message! We will get back to you within 24 hours.');
    }

    /**
     * Display contact messages (admin only)
     */
    public function messages(Request $request)
    {
        // This would typically require admin authentication
        // $this->authorize('viewAny', ContactMessage::class);

        $query = ContactMessage::latest();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by project type
        if ($request->filled('project_type')) {
            $query->where('project_type', $request->project_type);
        }

        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('subject', 'like', "%{$searchTerm}%")
                  ->orWhere('message', 'like', "%{$searchTerm}%");
            });
        }

        $messages = $query->paginate(20);

        return view('admin.contact-messages', compact('messages'));
    }

    /**
     * Show a specific contact message (admin only)
     */
    public function show(ContactMessage $message)
    {
        // This would typically require admin authentication
        // $this->authorize('view', $message);

        // Mark as read if it's new
        if ($message->status === 'new') {
            $message->update(['status' => 'read']);
        }

        return view('admin.contact-message-detail', compact('message'));
    }

    /**
     * Update contact message status (admin only)
     */
    public function updateStatus(Request $request, ContactMessage $message)
    {
        // This would typically require admin authentication
        // $this->authorize('update', $message);

        $request->validate([
            'status' => 'required|in:new,read,replied,resolved',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $message->update([
            'status' => $request->status,
            'admin_notes' => $request->admin_notes,
        ]);

        return redirect()->back()->with('success', 'Message status updated successfully.');
    }

    /**
     * Delete contact message (admin only)
     */
    public function destroy(ContactMessage $message)
    {
        // This would typically require admin authentication
        // $this->authorize('delete', $message);

        $message->delete();

        return redirect()->route('contact.messages')
            ->with('success', 'Contact message deleted successfully.');
    }
}
