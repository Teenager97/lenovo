@extends('admin.public.common')
@section('main')
<div class="col-md-10">
				
	<ol class="breadcrumb">
		<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
		<li><a href="#">分类管理</a></li>
		<li class="active">分类列表</li>

		<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
	</ol>

	<!-- 面版 -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
			<a href="/admin/types/create" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> 添加分类</a>
			
			<p class="pull-right tots" >共有 10 条数据</p>
			<form action="" class="form-inline pull-right">
				<div class="form-group">
					<input type="text" name="" class="form-control" placeholder="请输入你要搜索的内容" id="">
				</div>
				
				<input type="submit" value="搜索" class="btn btn-success">
			</form>


		</div>
		<table class="table-bordered table table-hover">
			<th><input type="checkbox" name="" id=""></th>
			<th>ID</th>
			<th>名字</th>
			<th>标题</th>
			<th>关键字</th>
			<th>描述</th>
			<th>添加子类</th>
			<th>楼层</th>
			<th>操作</th>

			@foreach($data as $value)
			<tr>
				<td><input type="checkbox" name="" id=""></td>
				<td>{{$value->id}}</td>

				<?php

					$arr=explode(',',$value->path);

					$tot=count($arr)-1;

				?>
				<td>{{$value->name}}</td>
				<td>{{$value->title}}</td>
				<td>{{$value->keywords}}</td>
				<td>{{$value->description}}</td>
				<td><a href="/admin/types/create?pid={{$value->id}}&path={{$value->path}},{{$value->id}},">添加子类</a></td>
				
				@if($value->is_lou)
				<td><span class="btn btn-success">是</span></td>
				@else
				<td><span class="btn btn-danger">否</span></td>
				@endif
				
				<td><a href="/admin/types/" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="deleted({{$value->id}})" class="glyphicon glyphicon-trash"></a></td>
			</tr>
			@endforeach
			
		</table>
		<!-- 分页效果 -->
		<div class="panel-footer">
			<nav style="text-align:center;">
				<ul class="pagination">
				{{$show->links()}}
				</ul>
			</nav>

		</div>
	</div>
</div>
<script>
	// 删除数据
	function deleted(id){
		if(confirm("您确认要删除么？")){
			// 发送post请求
		$.post("/admin/types/"+id,{"_token":"{{csrf_token()}}",'_method':'delete'},function(data){
			if(data==1){
				window.location.reload();
			}
          })
		}
		
	}
</script>
@endsection