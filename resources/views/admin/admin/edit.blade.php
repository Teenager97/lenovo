<form action="" onsubmit="return false;" id="formEdit">
						<div class="form-group">
							<label for="">用户名</label>
							<input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="请输入用户名" id="">
							<div id="userInfo">
								
							</div>
                            <input type="hidden" name="id" value="{{$data->id}}">
						</div>
						<div class="form-group">
							<label for="">密码</label>
							<input type="password" name="pass" value="{{$data->pass}}" class="form-control" placeholder="请输入新密码" id="">
							<div id="passInfo">
								
							</div>
						</div>
						<div class="form-group">
							<label for="">确认密码</label>
							<input type="password" name="repass" value="{{$data->pass}}"  class="form-control" placeholder="请再次输入密码" id="">
						</div>
						<div class="form-group">
							<label for="">状态</label>
							<br>
                            @if($data->status)
                            <input type="radio" name="status"  value="0" onclick="status(this,{{$value->id}},0)">正常
							<input type="radio" name="status" checked value="1" onclick="status(this,{{$value->id}},1)">禁用
                            @else
                            <input type="radio" name="status" checked value="0" onclick="status(this,{{$value->id}},0)">正常
							<input type="radio" name="status" value="1" onclick="status(this,{{$value->id}},1)">禁用
                            @endif
							
						</div>
						<div class="form-group pull-right">
							<input type="submit" value="提交" onclick="add()" class="btn btn-success">
							<input type="reset" id="reset" value="重置" class="btn btn-danger">
						</div>

						<div style="clear:both"></div>
					</form>