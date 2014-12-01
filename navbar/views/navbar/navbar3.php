<div class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo CIVIC_LINKS_BASE_URL; ?>"> <img src="<?php echo CIVIC_LINKS_LOGO; ?>" alt="logo" class="brand-logo"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav"> 
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
          <li class="nav visible-xs">
            <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
              Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] . ' ' . Yii::app()->session['user']['lastname']; ?>
            </a>
          </li>
          <li class="nav visible-xs"><a href="<?php echo LOGOUT_URL; ?>">Esci</a></li>
        <?php } else { ?>
          <li class=" visible-xs"><a class="login-link" href="#">Accedi</a></li>
          <li class=" visible-xs register-link"><a href="<?php echo REGISTRATION_URL; ?>">Iscriviti</a></li>
        <?php } ?>
        <li><a href="<?php echo FACT_CHECKING_PROJECT_BASE_URL; ?>">Fact Checking</a></li>
        <li><a href="<?php echo TIMU_PROJECT_BASE_URL; ?>">Timu</a></li>
        <li><a href="<?php echo CIVICI_PROJECT_BASE_URL; ?>">Civici</a></li>
        <li><a href="<?php echo CONTEST_GRANT_PROJECT_BASE_URL; ?>">CivicGrant</a></li>
      </ul>

      <ul class="nav navbar-nav hidden-xs pull-right"> 
        <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
          <li>
            <a href="<?php echo PROFILE_URL .  Yii::app()->session['user']['id']; ?>" target="_blank">
              Benvenuto:&nbsp;<?php echo Yii::app()->session['user']['firstname'] . ' ' . Yii::app()->session['user']['lastname']; ?>
            </a>
          </li>
        <?php } else { ?>  
          <li><a class="login-link" href="#">Accedi</a></li>
        <?php } ?>  
        <li><a href="<?php echo AHREF_FOUNDATION_URL; ?>" target="_blank"><img src="<?php echo AHREF_FOUNDATION_LOGO; ?>" alt="ahref logo" style="margin-top:-4px;"></a></li>
      </ul>
      <?php if (isset(Yii::app()->session['user']) && !empty(Yii::app()->session['user'])) {  ?> 
        <a href="<?php echo LOGOUT_URL; ?>" class="btn btn-primary btn-sm navbar-btn pull-right hidden-xs">Esci</a>
      <?php } else { ?>  
        <a href="<?php echo REGISTRATION_URL; ?>" class="btn btn-primary btn-sm navbar-btn pull-right hidden-xs register-link">Iscriviti</a>
      <?php } ?> 
    </div>
  </div>
</div>