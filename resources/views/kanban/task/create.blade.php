@extends(('kanban.task.taskmenu'))
{{-- Page title --}}
@section('title')
    Project {{$project->name}}
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/sortable.css')}}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- end of page level styles -->
  
    <style>
.task-board {
    background: #2c7cbc;
    display: inline-block;
    padding: 12px;
    border-radius: 3px;
    width: 550px;
    white-space: nowrap;
    overflow-x: scroll;
    min-height: 1000px;
}

.status-card {
    width: 250px;
    margin-right: 8px;
    background: #e2e4e6;
    border-radius: 3px;
    display: inline-block;
    vertical-align: top;
    font-size: 0.9em;
}

.status-card:last-child {
    margin-right: 0px;
}

.card-header {
    width: 100%;
    padding: 10px 10px 0px 10px;
    box-sizing: border-box;
    border-radius: 3px;
    display: block;
    font-weight: bold;
}

.card-header-text {
    display: block;
}

ul.sortable {
    padding-bottom: 10px;
}

ul.sortable li:last-child {
    margin-bottom: 0px;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0px;
}

.text-row {
    padding: 15px 10px;
    margin: 10px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 3px;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    font-size: 0.8em;
    white-space: normal;
    line-height: 20px;
}

.ui-sortable-placeholder {
    visibility: inherit !important;
    background: transparent;
    border: #666 2px dashed;
}
</style>
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Your Project
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
    <div class="bg-container">
    

         
            <div>
            <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#list">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                New List
            </button>
            </div>
         
            
        
    
    
    <div class="modal fade" id="list" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                        <form action="/postlist" method="POST" class="form-horizontal" id="otp_validation">
                            {{ csrf_field()}}
                            <table >
                                <tr>
                                    <input type="hidden" value="{{$project->id}}" name ="id_project">
                                </tr>
                                <tr>
                                   <div class="form-group">
                                    <label for="exampleFormControlSelect1">List</label>
                                    <select class="form-control" name="nama" id="exampleFormControlSelect1">
                                      <option>-</option>
                                      <option>To Do</option>
                                      <option>Doing</option>
                                      <option>Done</option>
                                      <option>Resource</option>
                                      <option>On Hold</option>
                                    </select>
                                  </div>
                                </tr>
                                <tr>
                                    <td style="padding: 10px"></td>
                                    <td style="text-align: right"><input type="submit" value="Save" class="btn btn-labeled btn-success"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>         
        </div>
    
       
    
        @foreach($list as $list) 
        @if($list->id_project === $project->id)
        <div class="status-card">
            <div class="card-header">
            <span class="card-header-text">{{$list->nama}}</span>
            </div>
            <ul class="sortable ui-sortable"
                id="sort{{$list->id}}"
                data-status-id="{{$list->id}}">
                    @foreach ($result as $taskrow)
                    @if($taskrow->id_list === $list->id) 
                    <li class="text-row ui-sortable-handle"
                        data-task-id="{{$taskrow->id_list}}"> <a href="/task/{{$taskrow->id}}/{{$project->id}}/edit">{{$taskrow->nama}}</a> 
                    </li>
                    @endif
                    @endforeach
                
            </ul>
            <div class="modal fade" id="task" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="modal-body">
                                        <form action="/posttask" method="POST" class="form-horizontal" id="otp_validation">
                                            {{ csrf_field()}}
                                            <table >
                                                <tr>
                                                    <input type="hidden" value="{{$list->id}}" name ="id_list">
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="nama">Masukan Nama Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="nama" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="desksipsi">Masukan Deskripsi Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="deskripsi" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"></td>
                                                    <td style="text-align: right"><input type="submit" value="Save" class="btn btn-labeled btn-success"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        </div>
            <div>
            <button type="button" data-toggle="modal" data-target="#task">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                Add Task
            </button>
            </div>
        </div>
        @endif
        @endforeach

            <div class="modal fade" id="edit" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="modal-body">
                                        <form action="/posttask/{$list->id}" method="POST" class="form-horizontal" id="otp_validation">
                                            {{ csrf_field()}}
                                            <table >
                                                <tr>
                                                    <input type="hidden" value="{{$list->id}}" name ="id_list">
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="nama">Masukan Nama Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="nama" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="desksipsi">Masukan Deskripsi Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="deskripsi" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"></td>
                                                    <td style="text-align: right"><input type="submit" value="Save" class="btn btn-labeled btn-success"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        </div>
            <div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@stop
@section('footer_scripts')
    <!--Plugin scripts-->
    <!-- <script type="text/javascript" src="{{asset('assets/vendors/sortable/js/Sortable.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script> -->
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <!-- <script type="text/javascript" src="{{asset('assets/js/pages/sortable.js')}}"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
 $( function() {
     $('ul[id^="sort"]').sortable({
         connectWith: ".sortable",
         receive: function (e, ui) {
                var id_list = $(ui.item).parent(".sortable").data("status-id");
                var id_task = $(ui.item).data("task-id");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/task/'+id_list+'/'+id_task,
                    data:{
                        id_list : id_list,
                        id_task : id_task
                    },
                    success: function(data){
                        alert(data);
                        }
                });
             }
     
     }).disableSelection();
     } );
  </script>
  <script>
  $('#edit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })
  </script>
    <!-- end of Page level scripts-->
@stop