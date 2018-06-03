<main style="margin-top: 0.1%;">
    <div class="container">
    	<h3 class="center-align">浏览相关上传信息</h3>
    	<p class="center"><span style="font-style: italic;"</span></p>
		<div class="divider"></div>
		<div class="row">
		    <div class="col s6">
			<h5 class="left">患者姓名：&nbsp;&nbsp;<?=trim_data($_GET['name'])?></h5>
			</div>
			<div>
			<h5 class="left">患者住院编号：&nbsp;&nbsp;<?=trim_data($_GET['number_hospital'])?></h5>
			</div>
		</div>
		<div class="row">
		    <div class="col s6">
			<h5 class="left">患者身份证号：&nbsp;&nbsp;<?=trim_data($_GET['ID'])?></h5>
			</div>
			<div class="col s6">
			<h5 class="left">主治医生邮箱：&nbsp;&nbsp;<?=trim_data($_GET['ID'])?></h5>
			</div>
		</div>
		<div class="row">
		        <div class="col s12">
		          <div class="card hoverable grey lighten-4">
		            <div class="card-content">
		              <!--<p style="text-align: center;"><span class="card-title" style="font-weight: bold;">系统登录</span></p>
		              <div class="divider"></div>
		              <br />		           -->

					      <div class="row">
					        <div class="input-field col s4">
					          上传者姓名:&nbsp;&nbsp;<?=trim_data($_GET['name'])?>
					        </div>
					        <div class="input-field col s4">
					         处理数据人员姓名:&nbsp;&nbsp;<?=trim_data($_GET['name'])?>
					        </div>
               <div class="input-field col s4">
                样本编号:&nbsp;&nbsp;<?=trim_data($_GET['name'])?>
             </div>
					        	<div class="input-field col s6">
						        	是否公开:
						          <input name="access" type="radio" id="test1" value="是" checked="checked"/>
				      			  <label for="test1">是</label>
				      			  <input name="access" type="radio" id="test2" value="否"/>
				      			  <label for="test2">否</label>
						        </div>
							  	<div class="input-field col s6">
						        	数据类型:
						          <input name="sample_type" type="radio" id="t1" value="RNA-Seq" checked="checked"/>
				      			  <label for="t1">RNA-Seq</label>
				      			  <input name="sample_type" type="radio" id="t2" value="CHIP-Seq"/>
				      			  <label for="t2">CHIP-Seq</label>
						        </div>
						        <div class="row"></div>
						        <div class="row"></div>
						        	<div class="file-field input-field col s6" style="margin-top: 1%;">
							      <div class="btn green">
							        <span>文件上传</span>
							        <input type="file" name="sample_file">
							      </div>
							      <div class="file-path-wrapper">
							        <input class="file-path validate" type="text" placeholder="只允许上传TXT文件">
							      </div>
							    </div>
							  <div class="file-field input-field col s6" style="margin-top: 1%;">
								  <div class="btn green">
									  <span>对照文件上传</span>
									  <input type="file" name="control_file">
								  </div>
								  <div class="file-path-wrapper">
									  <input class="file-path validate" type="text" placeholder="只允许上传TXT文件">
								  </div>
							  </div>
							    <input type="hidden" name="diagnosis_id" id="diagnosis_id" value="<?=trim_data($_GET['id'])?>" />
							    <input type="hidden" name="action" id="action" value="add" />
					      </div>

		            </div>

		          </div>
		        </div>
		      </div>
    </div>
</main>
