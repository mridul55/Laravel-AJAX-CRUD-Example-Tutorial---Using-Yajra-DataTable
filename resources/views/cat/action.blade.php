<ul class="nav nav-tabs" id="action_menu_{{$cats->id}}">
    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-line-chart" aria-hidden="true"></i></a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('cat.edit',$cats->id) }}"><i class="fa fa-pencil-square-o"></i> edit</a>
            <a class="dropdown-item" href="javascript::void(0)" id="delete_item" data-id ="{{$cats->id}}" data-url="{{route('cat.destroy',$cats->id) }}"><i class="fa fa-trash"></i>delete</a>
        </div>
      </li>
  </ul> 



  {{-- public function index(Request $request )
  {
      $cats = Cat::select('id','name','type')->get();
      if($request->ajax()){
         return DataTables::of($cats)
          ->addColumn('action', function ($cats) {
              return view('cat.action', compact('cats'));
          })
          ->rawColumns(['action'])->make(true);
      }
      
      return view('cat.create', );
   
  } --}}
