<?php

namespace App\Http\Controllers;
use App\Semblanza;
use App\proyectos;
use App\centroaugusto;
use App\eventos;
use App\equipos;
use App\videos;
use App\inicio;
use App\Event;
use App\Project;
use App\Team;
use App\Usersprofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Mail\MailService;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|string',
            'correo'=> 'required|email',
            'contrasena' => 'required|confirmed',
            'contrasena_confirmation' => 'required',
            'direccion'=> 'nullable',
            'role'=>'required'
        ]);
        if($validator->fails())
            return view('registro')->with(['errors'=>$validator->errors()->toArray()]);

        $user=Usersprofile::create([
            'firstname'=> $request->nombre,
            'email'=> $request->correo,
            'password'=> $request->contrasena,
            'address'=>$request->direccion,
            'role'=>$request->role
        ]);
        Mail::to($request->correo)->send(new MailService('Registration','thankyoumail'));
        $request->session()->put('user', $user->toArray());

        return redirect('/');
    } 
    public function projects(Request $request){
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $projects=Project::all();
        return view('project')->with(['data'=>$projects->toArray()]);
    }

     public function teams(Request $request){
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $teams=Team::all();
        return view('team')->with(['data'=>$teams->toArray()]);
    }

    public function events(Request $request){
        if(!$request->session()->exists('user')){
          return   redirect('/login');
        }
        $projects=Event::all();
        return view('event')->with(['data'=>$projects->toArray()]);
    }
    public function logindata(Request $request){
        
        $validator = Validator::make($request->all(),[
            'correo'=> 'required|email',
            'contrasena' => 'required'
        ]);
        
        if($validator->fails())
            return view('login')->with(['errors'=>$validator->errors()->toArray()]);

        $user=Usersprofile::where('email',$request->correo)->where('password',$request->contrasena)->first();
       
        if($user==null)
            return view('login')->with(['errors'=>['userdata'=>'invalid user found']]);
        $request->session()->put('user', $user->toArray());

        return redirect('index');
    }
    public function addPojectdata(Request $request){
       
        if(!$request->session()->exists('user')){
        }
        $validator = Validator::make($request->all(),[
            'input_title' => 'required|string',
            'input_description' => 'required',
            'video'=>'nullable'
        ]);
        if($validator->fails())
            return view('addproject')->with(['errors'=>$validator->errors()->toArray()]);
       
        $user=Project::create([
            'title'=> $request->input_title,
            'desc'=> $request->input_description,
            'video' => $request->video,
            'user_id' =>$request->session()->get('user')['id']
        ]);
        return redirect('/projects');
    }
    public function addEventdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_title' => 'required|string',
            'input_description' => 'required',
            'input_eventdate'=>'required',
            'input_venue'=> 'required'
        ]);      
        if($validator->fails())
            return view('addproject')->with(['errors'=>$validator->errors()->toArray()]);
       
        $user=Event::create([
            'title'=> $request->input_title,
            'desc'=> $request->input_description,
            'event_date' => $request->input_eventdate,
            'venue' =>$request->input_venue
        ]);
        return redirect('/events');
    }

    public function addTeamdata(Request $request){
        
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }

        $validator = Validator::make($request->all(),[
            'input_projectid' => 'required|integer',
            'input_name' => 'required|string',
            'input_description' => 'required',
        ]); 

        if($validator->fails())
            return view('addteam')->with(['errors'=>$validator->errors()->toArray()]);

        $count = DB::table('projects')
        ->where('id', $request->input_projectid)
        ->get();
        foreach ($count as $projects) {
                if($projects->id == $request->input_projectid){
                    $user=Team::create([

                    'projectid'=> $request->input_projectid,
                    'name'=> $request->input_name,
                    'description'=> $request->input_description
                    ]);
                }

            }        
        return redirect('/teams');
    }

    public function editEventdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:events,id',
            'input_title' => 'nullable|string',
            'input_description' => 'nullable',
            'input_eventdate'=>'nullable',
            'input_venue'=> 'nullable'
        ]);      
        if($validator->fails())
            return view('editevent')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('events')
        ->where('id', $request->input_ID)
        ->update(array_filter([
            'title'=> $request->input_title,
            'desc'=> $request->input_description,
            'event_date' => $request->input_eventdate,
            'venue' =>$request->input_venue
        ]));
        return redirect('/events');
    }

    public function editTeamdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:team,id',
            'input_name' => 'nullable|string',
            'input_description' => 'nullable'
        ]);      
        if($validator->fails())
            return view('editteam')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('team')
        ->where('id', $request->input_ID)
        ->update(array_filter([
            'name'=> $request->input_name,
            'description'=> $request->input_description
        ]));
        return redirect('/teams');
    }

    public function editprojectdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:projects,id',
            'input_title' => 'nullable|string',
            'input_description' => 'nullable'
        ]);      
        if($validator->fails())
            return view('editproject')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('projects')
        ->where('id', $request->input_ID)
        ->update(array_filter([
            'title'=> $request->input_title,
            'desc'=> $request->input_description
        ]));
        return redirect('/projects');
    }

    public function deleteEventdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:events,id'
        ]);      
        if($validator->fails())
            return view('deleteevent')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('events')->where('id',$request->input_ID)->delete();
        return redirect('/events');
    }

    public function deleteTeamdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:team,id'
        ]);      
        if($validator->fails())
            return view('deleteteam')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('team')->where('id',$request->input_ID)->delete();
        return redirect('/teams');
    }

    public function deleteProjectdata(Request $request){
       
        if(!$request->session()->exists('user')){
            return redirect('/login');
        }
        $validator = Validator::make($request->all(),[
            'input_ID' =>'required|exists:projects,id'
        ]);      
        if($validator->fails())
            return view('deleteproject')->with(['errors'=>$validator->errors()->toArray()]);
        DB::table('projects')->where('id',$request->input_ID)->delete();
        return redirect('/projects');
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('/login');
    }

    public function semblanza(Request $request){
        $semblanza = Semblanza::all();
        return view('semblanza')->with(['data'=>$semblanza->toArray()]);
    }

     public function centroaugusto(Request $request){
        $centroaugusto = centroaugusto::all();
        return view('centro')->with(['data'=>$centroaugusto->toArray()]);
    }
    public function proyectos(Request $request){
        $proyectos = proyectos::all();
        return view('proyectos')->with(['data'=>$proyectos->toArray()]);
    }
    public function eventos(Request $request){
        $eventos = eventos::all();
        return view('eventos')->with(['data'=>$eventos->toArray()]);
    }
    public function equipos(Request $request){
        $equipos = equipos::all();
        return view('equipo')->with(['data'=>$equipos->toArray()]);
    }
    public function videos(Request $request){
        $videos = videos::all();
        return view('video')->with(['data'=>$videos->toArray()]);
    }
     public function inicio(Request $request){
        $inicio = inicio::all();
        return view('inicio')->with(['data'=>$inicio->toArray()]);
    }
}
