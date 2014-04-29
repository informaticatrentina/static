<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo CIVIC_LINKS_BASE_URL; ?>"> <img src="<?php echo CIVIC_LINKS_LOGO; ?>" width="116" height="24" alt="logo" class="brand-logo"></a>
      <div class="nav-collapse collapse">
        <ul class="nav" id="yw0">
          <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
            <li class="hidden-desktop"><a>Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] . ' ' . Yii::app()->session['user']['lastname']; ?></a></li>
            <li class="hidden-desktop"><a href="<?php echo LOGOUT_URL; ?>">Logout</a></li>            
          <?php } else { ?>
            <li class="hidden-desktop login-link"><a href="#">Accedi</a></li>
            <li class="hidden-desktop register-link"><a href="<?php echo REGISTRATION_URL; ?>">Iscriviti</a></li>
          <?php } ?>
          <li><a href="<?php echo FACT_CHECKING_PROJECT_BASE_URL; ?>">Fact Checking</a></li>
          <li><a href="<?php echo TIMU_PROJECT_BASE_URL; ?>">Timu</a></li>
          <li><a href="<?php echo CIVICI_PROJECT_BASE_URL; ?>">Civici</a></li>
          <li><a href="<?php echo CONTEST_GRANT_PROJECT_BASE_URL; ?>">CivicGrant</a></li>
        </ul>

        <ul class="nav pull-right visible-desktop"> 
          <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
            <li><a>Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] . ' ' . Yii::app()->session['user']['lastname']; ?></a></li>
          <?php } else { ?>
            <li class="login-link"><a href="#">Accedi</a></li>
          <?php } ?>
          <li><a href="<?php echo AHREF_FOUNDATION_URL; ?>" target="_blank"><img src="<?php echo AHREF_FOUNDATION_LOGO; ?>" alt="ahref logo"></a></li>
        </ul>
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) { ?> 
          <a href="<?php echo LOGOUT_URL; ?>" class="btn btn-nav pull-right visible-desktop">Logout</a>
        <?php } else { ?>
          <a href="<?php echo REGISTRATION_URL; ?>" class="btn btn-nav pull-right visible-desktop register-link">Iscriviti</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>