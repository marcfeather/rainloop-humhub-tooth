<?php
/**
 * Login and registration page by AuthController
 *
 * @property CFormModel $model is the login form.
 * @property CFormModel $registerModel is the registration form.
 * @property Boolean $canRegister indicates that anonymous registrations are enabled.
 *
 * @package humhub.modules_core.user.views
 * @since 0.5
 */
$this->pageTitle = Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in');
$baseUrl = Yii::app()->baseUrl; 
$cs = Yii::app()->getClientScript();
//$cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
//$cs->registerCssFile($baseUrl.'/css/flatelements.css');
$cs->registerCssFile($baseUrl.'/css/custom.css');
?>
<div class="container">
    <div class="row">
    	<div class="col-xs-12 text-center">
    		<h1 style="padding:100px 0 10px 0">HumHub</h1>
    		<h1 class="text-center login-title">Ready to see your Wish List?</h1>
    	</div>

    	<div class="col-xs-12 text-center">
    		<div class="login-icon-list">    			            
            <h2 class="login-sub-title text-center">Choose your email service and Sign In... </h2>
				<div id="gmail-login" data-placement="top" data-toggle="tooltip" data-original-title="Gmail" style="cursor: pointer; padding-right: 20px;" title="Gmail" class="icon icon-gmail"><img src="http://alkurn.net/clients/humhub/images/gmail.png" alt="Gmail" class="designare_grayscale"></div>

				<div id="yahoo-login" data-placement="top" data-toggle="tooltip" data-original-title="Yahoo" style="cursor: pointer; padding-right: 20px;" title="Yahoo" class="icon icon-yahoo"><img src="http://alkurn.net/clients/humhub/images/yahoo.png" alt="Yahoo" class="designare_grayscale"></div>

				<div id="facebook-login" data-placement="top" data-toggle="tooltip" data-original-title="Facebook" style="cursor: pointer; padding-right: 20px;" title="Facebook" class="icon icon-facebook"><img src="http://alkurn.net/clients/humhub/images/facebook.png" alt="Facebook" class="designare_grayscale"></div>

				<div id="hotmail-login" data-placement="top" data-toggle="tooltip" data-original-title="Hotmail" style="cursor: pointer; padding-right: 20px;" title="Hotmail" class="icon icon-hotmail"><img src="http://alkurn.net/clients/humhub/images/hotmail.png" alt="Hotmail" class="designare_grayscale"></div>

				<div id="outlook-login" data-placement="top" data-toggle="tooltip" data-original-title="Outlook" style="cursor: pointer; padding-right: 20px;" title="Outlook" class="icon icon-outlook"><img src="http://alkurn.net/clients/humhub/images/outlook.png" alt="Outlook" class="designare_grayscale"></div>

				<div id="aol-login" data-placement="top" data-toggle="tooltip" data-original-title="AOL" style="cursor: pointer; padding-right: 20px;" title="AOL" class="icon icon-aol"><img src="http://alkurn.net/clients/humhub/images/aol.png" alt="AOL" class="designare_grayscale"></div>
				
    		</div>
    	</div>

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="gmail-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/gmail.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- Gmail form -->

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="yahoo-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/yahoo.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- Yahoo form -->

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="facebook-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/facebook.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- Facebook form -->

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="hotmail-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/hotmail.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- Hotmail form -->

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="outlook-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/outlook.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- Outlook form -->

        <div class="col-sm-6 col-md-4 col-md-offset-4" id="aol-login-form" style="display:none;">
            <div class="account-wall">
                <img class="profile-img" src="http://alkurn.net/clients/humhub/images/aol.png" alt="">
                <div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>
            </div>
        </div> <!-- AOL form -->


    </div>
</div>

<?php /*?><div class="container" style="text-align: center;">

    <?php $this->widget('application.widgets.LogoWidget', array('place' => 'login')); ?>
    <br>

    <!--<div class="panel panel-default animated bounceIn" id="login-form"
         style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

        <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Please</strong> sign in'); ?></div>

        <div class="panel-body">

            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'account-login-form',
                'enableAjaxValidation' => false,
            ));
            ?>

            <p><?php echo Yii::t('UserModule.views_auth_login', "If you're already a member, please login with your username/email and password."); ?></p>

            <div class="form-group">
                <?php echo $form->textField($model, 'username', array('class' => 'form-control', 'id' => 'login_username', 'placeholder' => Yii::t('UserModule.views_auth_login', 'username or email'))); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->passwordField($model, 'password', array('class' => 'form-control', 'id' => 'login_password', 'placeholder' => Yii::t('UserModule.views_auth_login', 'password'))); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?> <?php echo Yii::t('UserModule.views_auth_login', 'Remember me next time'); ?>
                </label>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Sign in'), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
                <div class="col-md-8 text-right">
                    <small>
                        <?php echo Yii::t('UserModule.views_auth_login', 'Forgot your password?'); ?>
                        <a
                            href="<?php echo $this->createUrl('//user/auth/recoverPassword'); ?>"><br><?php echo Yii::t('UserModule.views_auth_login', 'Create a new one.') ?></a>
                    </small>
                </div>
            </div>

            <?php $this->endWidget(); ?>

        </div>

    </div>-->

    <br>

    <?php /*?><?php if ($canRegister) : ?>
        <!--<div id="register-form"
             class="panel panel-default animated bounceInLeft"
             style="max-width: 300px; margin: 0 auto 20px; text-align: left;">

            <div class="panel-heading"><?php echo Yii::t('UserModule.views_auth_login', '<strong>Sign</strong> up') ?></div>

            <div class="panel-body">

                <p><?php echo Yii::t('UserModule.views_auth_login', "Don't have an account? Join the network by entering your e-mail address."); ?></p>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'account-register-form',
                    'enableAjaxValidation' => false,
                ));
                ?>

                <div class="form-group">
                    <?php echo $form->textField($registerModel, 'email', array('class' => 'form-control', 'id' => 'register-email', 'placeholder' => Yii::t('UserModule.views_auth_login', 'email'))); ?>
                    <?php echo $form->error($registerModel, 'email'); ?>
                </div>
                <hr>
                <?php echo CHtml::submitButton(Yii::t('UserModule.views_auth_login', 'Register'), array('class' => 'btn btn-primary')); ?>

                <?php $this->endWidget(); ?>
            </div>
        </div>-->

    <?php endif; ?>

    <?php $this->widget('application.widgets.LanguageChooser'); ?>
</div><?php */?>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<!-- Latest compiled and minified JS -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
$('.login-icon-list .icon').tooltip();
$(document).ready(function(){

    $("#gmail-login").click(function(){
        $("#gmail-login-form").show(1000);
        $(".login-icon-list").hide();
    });

    $("#yahoo-login").click(function(){
        $("#yahoo-login-form").show(1000);
        $(".login-icon-list").hide();
    });

    $("#facebook-login").click(function(){
        $("#facebook-login-form").show(1000);
        $(".login-icon-list").hide();
    });

    $("#hotmail-login").click(function(){
        $("#hotmail-login-form").show(1000);
        $(".login-icon-list").hide();
    });

    $("#outlook-login").click(function(){
        $("#outlook-login-form").show(1000);
        $(".login-icon-list").hide();
    });

    $("#aol-login").click(function(){
        $("#aol-login-form").show(1000);
        $(".login-icon-list").hide();
    });

});
</script>
<script type="text/javascript">
    $(function() {
        // set cursor to login field
        $('#login_username').focus();
    })

    // Shake panel after wrong validation
<?php if ($form->errorSummary($model) != null) { ?>
        $('#login-form').removeClass('bounceIn');
        $('#login-form').addClass('shake');
        $('#register-form').removeClass('bounceInLeft');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

    // Shake panel after wrong validation
<?php if ($form->errorSummary($registerModel) != null) { ?>
        $('#register-form').removeClass('bounceInLeft');
        $('#register-form').addClass('shake');
        $('#login-form').removeClass('bounceIn');
        $('#app-title').removeClass('fadeIn');
<?php } ?>

</script>


