<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control("email") ?>
<?= $this->Form->control("password") ?>
<?= $this->Form->button("login") ?>
<?= $this->Form->end() ?>