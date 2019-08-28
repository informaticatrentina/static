<div class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav"> 
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
          <li class="nav visible-xs">
            <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
              Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] .((isset(Yii::app()->session['user']['lastname']) && !empty(Yii::app()->session['user']['lastname']))?(' '.Yii::app()->session['user']['lastname']):('')); ?>
            </a>
          </li>
          <li class="nav visible-xs"><a href="<?php echo LOGOUT_URL; ?>">Esci</a></li>
        <?php } else { ?>
          <li class=" visible-xs"><a class="login-link" href="#">Accedi</a></li>
          <?php if (isset(Yii::app()->globaldef->params['disable_registration_link']) && Yii::app()->globaldef->params['disable_registration_link'] != 1) { ?>
            <li class=" visible-xs register-link"><a href="<?php echo REGISTRATION_URL; ?>">Iscriviti</a></li>
          <?php }} ?>
      </ul>

      <ul class="nav navbar-nav hidden-xs pull-right"> 
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
		    <?php if (isset(Yii::app()->session['social_login']) && !empty(Yii::app()->session['social_login']) && Yii::app()->session['social_login'] == 'true') {  ?> 
          <li>
            <a href="#" >
              Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] .((isset(Yii::app()->session['user']['lastname']) && !empty(Yii::app()->session['user']['lastname']))?(' '.Yii::app()->session['user']['lastname']):('')); ?>
            </a>
          </li>
		  <?php } else { ?>
		  <li>
            <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
              Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] .((isset(Yii::app()->session['user']['lastname']) && !empty(Yii::app()->session['user']['lastname']))?(' '.Yii::app()->session['user']['lastname']):('')); ?>
            </a>
          </li>
		  <?php } ?>  
        <?php } else { ?>
          <li><a class="login-link" href="#">Accedi</a></li>
        <?php } ?>  
      </ul>
      <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
        <a href="<?php echo LOGOUT_URL; ?>" class="btn btn-primary btn-sm navbar-btn pull-right hidden-xs">Esci</a>
      <?php } else { ?>
        <?php if (isset(Yii::app()->globaldef->params['disable_registration_link']) && Yii::app()->globaldef->params['disable_registration_link'] != 1) { ?>
        <a href="<?php echo REGISTRATION_URL; ?>" class="btn btn-primary btn-sm navbar-btn pull-right hidden-xs register-link">Iscriviti</a>
      <?php }} ?>
    </div>
  </div>
</div>
