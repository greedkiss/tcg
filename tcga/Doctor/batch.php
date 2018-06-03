<?php
	session_start();
	if($_SESSION['user_name'] == '' || $_SESSION['user_type'] !== 0){
		header('Location: /');
		exit;
	}
	include str_replace('\\', '/', dirname(__DIR__)).'/front_page/header_inner.php';
	?>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="external nofollow" >
  <!-- <script src="http://code.jquery.com/jquery-1.10.2.js"></script> -->

		<script src="/public/js/jquery-2.0.0.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script>
	$(function(){
		$( "#tags" ).autocomplete({
		  source: '/Doctor/front_script/autoFill.php',
		 // source:["sad","fd","sf"],
		 minLength: 2
	 });
 });
 $(function(){
	 		$( "#tags2" ).autocomplete({
 				source:'/Doctor/front_script/autoFill.php',
 				minLength: 2
			});
});
$(function(){
		$( "#tags3" ).autocomplete({
		source:'/Doctor/front_script/autoFill.php',
		minLength: 2
});
});
 </script>
	<main style="background-color: #f5f2f0;">
		<br />
		<br />
		<div>
			<div class="row">
		        <div class="col s7">
		          <div class="card  hoverable">
		            <div class="card-content center-align">
		              <span class="card-title">请输入预测需要的文件</span>
		              <div class="divider"></div>
		              <div class="row">
		              	<form id="lung-cancer">
		              	<div class="container">
		              		<div class="row">
		              			<div class="col s4">
		              				<div class="input-field">
		              					<label style="font-size: 1.5em;color: black;">请输入上传文件类型</label>
		              				</div>
		              			</div>
		              			<div class="col s5 offset-s3">
						          <div class="input-field inline">
						            <input name="data-type" type="radio" id="test1" value="genechip"/>
      								<label for="test1">Gene-Chip</label>

      								<input name="data-type" type="radio" id="test2" checked="checked" value="rnaseq"/>
      								<label for="test2">RNA-Seq</label>

						          </div>
						        </div>
		              		</div>

		              		<div class="row">
		              			<div class="col s4">
		              				<div class="input-field">
		              					<label style="font-size: 1.5em;color: black;">是否上传对照文件</label>
		              				</div>
		              			</div>
		              			<div class="col s3 offset-s5">
						          <div class="input-field">
						          		<div class="switch">
									    <label>
									      否
									      <input type="checkbox" name="ctl">
									      <span class="lever"></span>
									      是
									    </label>
									  </div>
						          </div>
						        </div>
		              		</div>

		              		<br />
		              		<div class="row">
		              			<div class="col s4">
		              				<div class="input-field">
		              					<label style="font-size: 1.5em;color: black;">上传数据文件</label>
		              				</div>
		              			</div>
		              			<div class="col s5 offset-s3">
						          <div class="file-field input-field">
								      <div class="btn purple accent-2">
								        <span>文件</span>
								        <input type="file" name="input_file">
								      </div>
								      <div class="file-path-wrapper">
								        <input class="file-path validate" type="text" placeholder="只允许上传TXT文件">
								      </div>
								    </div>
						        </div>
		              		</div>
		              		<div class="divider"></div>

		              		<div class="row control-row" style="display: none;">
		              			<div class="col s4">
		              				<div class="input-field">
		              					<label style="font-size: 1.5em;color: black;">上传对照文件</label>
		              				</div>
		              			</div>
		              			<div class="col s5 offset-s3">
						          <div class="file-field input-field">
								      <div class="btn blue lighten-1">
								        <span>文件</span>
								        <input type="file" name="control_file">
								      </div>
								      <div class="file-path-wrapper">
								        <input class="file-path validate" type="text" placeholder="只允许上传TXT文件">
								      </div>
								    </div>
						        </div>
		              		</div>
		              	</div>
		              </form>
		              </div>
		            </div>
		            <div class="card-action center-align">
		              <button class="btn waves-effect waves-light" type="button" name="action">提交
					    <i class="material-icons right">send</i>
					  </button>
		            </div>
		          </div>
		        </div>
		        <div class="col s5">
		        	<div class="row">
			        <div class="col s12">
			          <div class="card white hoverable">
			            <div class="card-content black-text">
			              <p class="center-align"><span class="card-title">单例/组合药物预测</span></p>
			              <div class="divider"></div>
			              <br />
			              <div class="row">
						    <form class="col s12" id="drug_combina">
						      <div class="row">
						        <div class=" col s12">
											<p class="ui-widget">
										<label for="tags">第一个药物名： </label>
										<input id="tags" name="drug1">
										</p>
									</div>
						        </div>
										<div class="row">
							        <div class=" col s12">
												<p class="ui-widget">
											<label for="tags">第二个药物名： </label>
											<input id="tags2" name="drug2">
											</p>
										</div>
							        </div>
											<div class="row">
								        <div class=" col s12">
													<p class="ui-widget">
												<label for="tags">第三个药物名： </label>
												<input id="tags3" name="drug3">
												</p>
											</div>
								        </div>
						        <!-- <div class="input-field col s4">
						          <i class="material-icons prefix">info</i>
						          <input id="icon_d2" type="text" class="validate" name="drug2">
						          <label for="icon_d2">第二个药物名</label>
						        </div>
						        <div class="input-field col s4">
						          <i class="material-icons prefix">info</i>
						          <input id="icon_d3" type="text" class="validate" name="drug3">
						          <label for="icon_d3">第三个药物名</label>
						        </div> -->
						      <!-- </div> -->

						      <input type="hidden" name="generank" id="generank"/>
						    </form>
						  </div>
			            </div>
			            <div class="card-action">
			              <div class="center-align">
			              	<button class="btn waves-effect waves-light" type="button" name="drug_predict">提交
						    <i class="material-icons right">send</i>
						  </button>
			              </div>
			              <br />
			              <div class="divider"></div>
			              <br />
			              <div class="left-align" style="display: none;" id="p-value">
			              	<p style="font-weight: 800;font-size: 1.1em;">预测组合药物p值(取负log值)为:&nbsp;&nbsp;<span></span></p>
			            </div>
			          </div>
			        </div>
			      </div>
		        </div>
		      </div>
		</div>


		<div style="display: none; " class="show-result">
			<div class="row">
				<div class="col s6">
					<div class="card white hoverable">

							<h5 style="font-family: Georgia;color:red;text-align:center">批准药物</h5>
					<table id="app" class="responsive-table center highlight" width="100%" style="table-layout:fixed;">
				        <thead >
				          <tr>
				              <th style="width:50%;"  ></th>
				              <th style="width:50%;"></th>

				          </tr>
				        </thead>
				        <tbody></tbody>
			      </table>
						</div>
				</div>
				<div class="col s6" >
						<div class="card white hoverable">

							<h5 style="font-family: Georgia;color:red;text-align:center">重定位药物</h5>
					<table id="relocation" class="responsive-table center bordered highlight"  width="100%" style="table-layout:fixed;">
				        <thead>
				          <tr>
				              <th width="60%">药物名</th>
				              <th width="40%">p值(取负log对数)</th>
				          </tr>
				        </thead>
				        <tbody></tbody>
			      </table>

			</div>
		</div>
		</div>
			<div class="row">
				<div class="col s6" >
					<div class="card white hoverable">
							<h5 style="font-family: Georgia;color:red;text-align:center">批准药物组合</h5>
					<table id="app-app" class="responsive-table center bordered highlight"  width="100%" style="table-layout:fixed;">
				        <thead>
				          <tr>
				              <th style="word-wrap:break-word;">药物名</th>
				              <th style="word-wrap:break-word;">p值(取负log对数)</th>
				              <th style="word-wrap:break-word;">药物互作信息</th>
				          </tr>
				        </thead>
				        <tbody></tbody>
			      </table>
					</div>
			</div>
				<div class="col s6">
					<div class="card white hoverable">
							<h5 style="font-family: Georgia;color:red;text-align:center">批准与重定位药物组合</h5>
					<table id="app-relocation" class="responsive-table center bordered highlight"  width="100%" style="table-layout:fixed;">
				        <thead>
				          <tr>
				              <th width="40%" style="word-wrap:break-word;">药物名</th>
				              <th width="30%">p值(取负log对数)</th>
				              <th width="30%">药物互作信息</th>
				          </tr>
				        </thead>
				        <tbody></tbody>
			      </table>
				</div>
			</div>
			</div>
		</div>

	</main>


<?php
    //D:/wamp/www/tcga
	include str_replace('\\', '/', dirname(__DIR__)).'/front_page/footer.html';
	?>
