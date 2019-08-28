<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="nav-collapse collapse">
        <ul class="nav" id="yw0">
          <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
            <li class="hidden-desktop">
              <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
                Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] .((isset(Yii::app()->session['user']['lastname']) && !empty(Yii::app()->session['user']['lastname']))?(' '.Yii::app()->session['user']['lastname']):('')); ?>
              </a>
            </li>
            <li class="hidden-desktop"><a href="<?php echo LOGOUT_URL; ?>">Esci</a></li>            
          <?php } else { ?>
            <li class="hidden-desktop login-link"><a href="#">Accedi</a></li>
            <?php if (isset(Yii::app()->globaldef->params['disable_registration_link']) && Yii::app()->globaldef->params['disable_registration_link'] != 1) { ?>
              <li class="hidden-desktop register-link"><a href="<?php echo REGISTRATION_URL; ?>">Iscriviti</a></li>
            <?php } ?>
          <?php } ?>
        </ul>

        <ul class="nav pull-right visible-desktop"> 
          <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
            <li>
              <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
                Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] .((isset(Yii::app()->session['user']['lastname']) && !empty(Yii::app()->session['user']['lastname']))?(' '.Yii::app()->session['user']['lastname']):('')); ?>
              </a>
            </li>
          <?php } else { ?>
            <li class="login-link"><a href="#">Accedi</a></li>
          <?php } ?>
        </ul>
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
          <a href="<?php echo LOGOUT_URL; ?>" class="btn btn-nav pull-right visible-desktop">Esci</a>
        <?php } else { ?>
          <?php if (isset(Yii::app()->globaldef->params['disable_registration_link']) && Yii::app()->globaldef->params['disable_registration_link'] != 1) { ?>
            <a href="<?php echo REGISTRATION_URL; ?>" class="btn btn-nav pull-right visible-desktop register-link">Iscriviti</a>
          <?php }} ?>
      </div>
    </div>
  </div>
</div>