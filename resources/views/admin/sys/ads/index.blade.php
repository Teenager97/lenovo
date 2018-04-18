@extends('admin.public.common')
@section('main')
<div class="col-md-10">
				
				<ol class="breadcrumb">
					<li><a href="#"><span class="glyphicon glyphicon-home"></span> 首页</a></li>
					<li><a href="#">用户管理</a></li>
					<li class="active">用户列表</li>

					<button class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-refresh"></span></button>
				</ol>

				<!-- 面版 -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<a href="javascript:;" class="btn btn-success">用户展示</a>
						
						<p class="pull-right tots" >共有  条数据</p>
						<form action="" class="form-inline pull-right">
							<div class="form-group">
								<input type="text" name="search" class="form-control" placeholder="请输入你要搜索的内容" id="">
							</div>
							
							<input type="submit" value="搜索" class="btn btn-success">
						</form>


					</div>
					<table class="table-bordered table table-hover">
						<th><input type="checkbox" name="" id=""></th>
						<th>ID</th>
						<th>电话</th>
						<th>邮箱</th>
						<th>注册时间</th>
						<th>状态</th>

						
						
					</table>
					<!-- 分页效果 -->
					<div class="panel-footer">
					<nav style="text-align:center;">
							<ul class="pagination">
								
							</ul>
						</nav>

					</div>
				</div>
			</div>
			@endsection