<!--graph -->
<div class="section">
    <div class="container">
    <h2 class="center"><span class="grey-text text-darken-2"><?= $data['clientdata']->AccessTable->AccessType ?></span> <span class="grey-text text-darken-4"><?= $data['clientdata']->MobilePhone ?></span></h2>
	  </div>
</div>
<div class="section">
    <div class="container">
    <div class="card">
    <div class="card-content">
        <form  role="form" id="profile_form" class="form">
    		<div class="row center">
          <div class="form-group">
            <div class="row">
        			<div class="col s12 m12 l12" >
                      <div class="input-field col s12 m6 l4">
                        <label for="FirstName">Ім'я</label>
                        <input type="text" class="form-control main" id="FirstName"
                         value="<?= $data['clientdata']->FirstName ?>" maxlength=32>
                      </div>
                      <div class="input-field col s12 m6 l4">
                        <label for="FirstName">Прізвище</label>
                        <input type="text" class="form-control main" id="Surname"
                         value="<?= $data['clientdata']->Surname ?>" maxlength=32>
                      </div>
                      <div class="input-field col s12 m6 l4">
                        <label for="FirstName">По-батькові</label>
                        <input type="text" class="form-control main" id="MiddleName"
                         value="<?= $data['clientdata']->MiddleName ?>" maxlength=32>
                      </div>
        			</div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col s12 m12 l12" >
                      <div class="input-field col s12 m6 l4">
                        <label for="FirstName">Дата народження</label>
                        <input type="text" class="form-control main" id="BirthDate"
                         value="<?php echo is_null($data['clientdata']->BirthDate) ? "-" : date('d.m.Y', substr($data['clientdata']->BirthDate,6,10).substr($data['clientdata']->BirthDate,19,5)) ?>" maxlength=32>
                      </div>
        			</div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col s12 m12 l12" >
                      <div class="input-field col s12">
                        <label for="FirstName">Адреса</label>
                        <input type="text" class="form-control main" id="Address"
                         value="<?= $data['clientdata']->Address ?>" maxlength=128>
                      </div>
        			</div>
            </div>
        </div>
        <button type="button" class="btn btn-flat waves-effect waves-light left" onclick="history.go(-1);">Повернутись</button>
        <button type="button" class="btn waves-effect waves-light right" onclick="updateProfile();">Зберегти</button>
        </div>
        </form>
    </div>
    </div>
    </div>
</div>
