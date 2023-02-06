<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Consult;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ConsultController extends Controller
{
    public function all(){
        $consults = Consult::all();
        
        return view ('consult.all', [
            'consults' => $consults,
        ]);
    }    
        
    public function create(){
        $user = Auth::User();
        $categories = Category::all();
        return view('consult.create', [
            'user' => $user,
            'categories' => $categories,
        ]);
    }
    public function consult(Request $request, $consult_id){
        if ($request->has('comment_author') &&
                $request->has('user_id') &&
                $request->has('consult_id')) {            
            $this->closeConsult($request);
        }
        if ($request->has('comment_jurist') &&
                $request->has('user_id') &&
                $request->has('consult_id')) {            
            $this->inWorkConsult($request);            
        }                
        $consult = Consult::find($consult_id);        
        $user = Auth::User();        
        //dd($user);                        
        return view ('consult.consult', [
            'consult' => $consult,
            'user' => $user,
        ]);
    }
        
    private function inWorkConsult($request){
            $this->addComment($request->consult_id, $request->user_id, $request->comment_jurist);            
            $consult = Consult::find($request->consult_id);
            $consult->jurist_id = $request->user_id;
            $consult->status = 'in work';
            $consult->save();
    }
    
    private function closeConsult($request){
            $this->addComment($request->consult_id, $request->user_id, $request->comment_author);            
            $consult = Consult::find($request->consult_id);            
            $consult->status = 'close';
            $consult->save();
    }
    
    private function addComment($consult_id, $user_id, $text_comment){
        $comment = new Comment;
        $comment->consult_id = $consult_id;
        $comment->user_id = $user_id;
        $comment->text_comment = $text_comment;
        $comment->save();
        return $comment;
    }
}
