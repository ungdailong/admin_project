<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('user_name');
            echo $this->Form->input('password');
            echo $this->Form->input('email');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('birthday');
            echo $this->Form->input('address');
            echo $this->Form->input('country_id');
            echo $this->Form->input('last_login');
            echo $this->Form->input('ip_login');
            echo $this->Form->input('status');
            echo $this->Form->input('group_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div class="page page-form">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><strong><span class="glyphicon glyphicon-th"></span> Sign up Form</strong></div>
                <div class="panel-body"  data-ng-controller="signupCtrl">                    
                    <!-- <form name="form_signup" class="form-horizontal form-validation" data-ng-submit="submitForm()"> -->
                    <?= $this->Rainbow->createForm('form_signup', ['class' => 'form-horizontal form-validation', 'data-ng-submit' => 'submitForm()']) ?>
                        <?php                
                            echo $this->Rainbow->input('user_name',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.name', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('password',['type' => 'password', 'placeholder' => 'Min length 6', 'data-ng-model' => 'user.password', 'data-ng-minlength' => '6', 'required' => true]);
                            echo $this->Rainbow->input('email',['type' => 'email', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.email', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('first_name',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.first_name', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('last_name',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.last_name', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('birthday',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.birthday', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('address',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.address', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('country_id',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.country_id', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('last_login',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.last_login', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('ip_login',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.ip_login', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);
                            echo $this->Rainbow->input('status',['type' => 'text', 'placeholder' => 'Min length 2, Max length 30', 'data-ng-model' => 'user.status', 'data-ng-minlength' => '2', 'data-ng-maxlength' => '30', 'required' => true]);                                                        
                            echo $this->Rainbow->select('group_id', ['Mustard', 'Ketchup', 'Barbecue'], ['data-ng-model' => 'user.group_id', 'empty' => 'Choose One', 'lableName' => 'Group']);
                        ?>
<!--                         <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">Confirm Password</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="password"
                                       class="form-control"
                                       data-ng-model="user.confirmPassword"
                                       required
                                       data-validate-equals="user.password">
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <div class="col-sm-3">
                                <label for="">Age</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="number"
                                       class="form-control"
                                       placeholder="Min value 0, max value 100"
                                       data-ng-model="user.age"
                                       required
                                       data-min="0"
                                       data-max="100">
                            </div>
                        </div> -->
                        <button type="submit"
                                class="btn btn-primary btn-block btn-lg"
                                data-ng-disabled="!canSubmit()">Sign up</button>
                        <div class="callout callout-info">
                            <p>Submit button will be active only when all fields are valid.</p>
                        </div>
                        <div class="divider"></div>
                        <div class="alert alert-info" data-ng-show="showInfoOnSubmit">This is just for demo. In real project, you will submit form with AJAX :)</div>                 
                    <!-- </form> -->
                    <?= $this->Rainbow->endForm(); ?>
                </div>
            </div>
        </div>
    </div>
</div>