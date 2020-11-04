<?php

namespace App\Http\Controllers;

use App\Book;
use App\Requests;
use App\User;
use Illuminate\Http\Request;

class RequestsController extends Controller
{


                                 //LIBRARIAN DASHBOARD FUNCTIONS

    public function pendingRequests()
    {
        $user = Requests::where('status', 'pending')->get();

        return view ('admin.librarian.pending_requests', compact('user'));
    }


    public function acceptRequestForm($id)
    {
        $request = Requests::where('id', $id)->first();

        return view ('admin.librarian.accept_request', compact('request'));
    }


    public function acceptRequest($id)
    {

        request()->validate([
            'issued_date' => 'required',
            'sub_date'  => 'required'
        ]);
        $request = Requests::where('id', $id)->first();
        $request->status = 'accepted';
        $request->issued_date = request('issued_date');
        $request->sub_date = request('sub_date');
        $request->save();

        $book = Book::where('name', $request->book_name)->first();
        $quantity = $book->quantity ;
        $new_quantity = $quantity -1;
        $book->quantity = $new_quantity;
        $book->save();

        $book_name =  $request->book_name;
        $user_last = $request->user->lastname;
        $user_first = $request->user->firstname;
        return redirect('/pending_requests')
            ->with('session_message', 'Request for '.$book_name . ' by ' .$user_last . " " . $user_first . ' has been Accepted');
    }


    public function declineRequestForm($id)
    {
        $request = Requests::where('id', $id)->first();

        return view ('admin.librarian.decline_request', compact('request'));
    }



    public function declineRequest($id)
    {


        request()->validate([
            'reason'  => 'required'
        ]);
        $request = Requests::where('id', $id)->first();
        $request->status = 'declined';
        $request->reason = request('reason');
        $request->save();


        $book_name =  $request->book_name;
        $user_last = $request->user->lastname;
        $user_first = $request->user->firstname;
        return redirect('/pending_requests')
            ->with('error_message', 'Request for '.$book_name . ' by ' .$user_last . " " . $user_first . ' has been Declined');
    }



    public function acceptedRequest()
    {
        $requests = Requests::where('status', 'accepted')->get();

        return view('admin.librarian.accepted_request', compact('requests'));
    }



    public function returnBook($id)
    {
        $request = Requests::where('id', $id)->first();
        $request->status = 'returned';
        $request->date_returned = date(" F d, Y");
        $request->save();

        $book = Book::where('name', $request->book_name)->first();
        $quantity = $book->quantity ;
        $new_quantity = $quantity + 1;
        $book->quantity = $new_quantity;
        $book->save();
        return back()->with('session_message', 'Book Returned Successfully');
    }



    public function declinedRequest()
    {
        $requests = Requests::where('status', 'declined')->get();

        return view('admin.librarian.declined_request', compact('requests'));
    }



    public function returnedBooks()
    {
        $requests = Requests::where('status', 'returned')->get();

        return view('admin.librarian.admin_returned_books', compact('requests'));
    }









    //USER DASHBOARD FUNCTIONS

    public function addDash()
    {
        $user_id = request('user_id');
        $book_name = request('book_name');
        $book_author = request('book_author');
        $book_image = request('book_image');

        $user = Requests::where('user_id', $user_id )
                           ->where('book_name', $book_name )
                           ->where('status', 'off')
                          ->orWhere('status', 'accepted')->first();
        if($user){
            return back()->with('error_message', 'Book Already in Dashboard');
        }
        Requests::create([
           'user_id' => $user_id,
           'book_author' => $book_author,
            'book_name' => $book_name,
            'book_image' => $book_image
        ]);

        return back()->with('session_message', 'Added to Dashboard Successfully');
    }




    public function myBooks()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
        where('status', 'off')->get();

        return view ('admin.user.user_books', compact('user'));
    }

    public function status()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
        where('book_name', request('book_name'))->first();

        $user->status = 'pending';
        $user->save();
        return back()->with('session_message', 'Request Sent, Please keep checking for any response');
    }



    public function pending()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
                          where('status', 'pending')->get();

        return view ('admin.user.user_pending', compact('user'));
    }

    public function acceptedBooks()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
        where('status', 'accepted')->get();

        return view ('admin.user.accepted_books', compact('user'));
    }


    public function declinedBooks()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
        where('status', 'declined')->get();

        return view ('admin.user.declined_books', compact('user'));
    }

    public function submittedBooks()
    {
        $user_id = auth()->user()->id;

        $user = Requests::where('user_id', $user_id)->
        where('status', 'returned')->get();

        return view ('admin.user.submitted_books', compact('user'));
    }








    //NEUTRAL


    public function destroy(Requests $requests)
    {
        $requests->delete();
        return back()->with('session_message', 'Deleted Successfully');
    }


}
