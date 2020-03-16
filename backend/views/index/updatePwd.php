<?php
use common\utils\ToolUtil;
/* @var $this yii\web\View */

$this->title = '修改密码';
?>
<style>
    body{background: #ffffff;}
</style>
<div class="layui-fluid layui-card" style="padding: 30px 0px;">
    <div class="layui-row">
        <form method="post" class="layui-form" action="<?=\yii\helpers\Url::toRoute(['index/update-pwd'])?>">
            <input name="_csrfBackend" type="hidden" value="<?=\Yii::$app->request->csrfToken?>" />
            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>原密码
                </label>
                <div class="layui-input-inline">
                    <input type="password" id="L_pass" name="user[L_pass]" value="" lay-verify="Lpass" placeholder="请输入密码"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="N_pass" class="layui-form-label">
                    <span class="x-red">*</span>新密码
                </label>
                <div class="layui-input-inline">
                    <input type="password" id="N_pass" name="user[pass]" value="" lay-verify="pass" placeholder="请输入密码"
                           autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    6到16个字符
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                    <span class="x-red">*</span>确认新密码
                </label>
                <div class="layui-input-inline">
                    <input type="password" id="L_repass" name="user[repass]" lay-verify="repass" placeholder="请再次输入密码"
                           autocomplete="off" class="layui-input">
                </div>
            </div>
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="add" lay-submit="">
                    确认修改
                </button>
            </div>
        </form>
    </div>
</div>
<script>

</script>
<?php
$sendSms = \yii\helpers\Url::toRoute(['index/send-sms']);
$update = \yii\helpers\Url::toRoute(['auth/update-admin-status']);
$_csrfBackend = \Yii::$app->request->csrfToken;
$serverTime = ToolUtil::getDate(time(),"Y-m-d H:i:s");
$endTime = ToolUtil::getDate(strtotime("+30 seconds"),"Y-m-d H:i:s");
$tableJs = <<<JS
    layui.use(['form', 'layer', 'util', 'laydate'],function() {
        $ = layui.jquery;  var form = F(layui.form), layer = layui.layer,util = layui.util,laydate = layui.laydate;      

        
        //自定义验证规则
        form.verify({
            Lpass: [/(.+){6,12}$/, '密码必须6到12位'],
            pass: [/(.+){6,12}$/, '密码必须6到12位'],
            repass: function(value) {
                if ($('#N_pass').val() != $('#L_repass').val()) {
                    return '两次密码不一致';
                }
            },
        });
        //监听提交
        var sFun = function (jsonData) {
                layer.close(load);
                var ic = (jsonData.status == true) ? icon.ICON_OK : icon.ICON_ERROR;
                layer.msg(jsonData.msg,{icon:ic},function () {
                    if(jsonData.status == true){
                        xadmin.close();                    
                    }
                });
        };
        form.submit('add','',sFun);
    });
JS;
$this->registerJs($tableJs,\yii\web\View::POS_END);
?>
<script>
</script>