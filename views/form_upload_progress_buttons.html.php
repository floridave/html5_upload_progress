<?php defined("SYSPATH") or die("No direct script access.") ?>

<!-- Proxy the done request back to our form, since its been ajaxified -->
<button id="g-upload-done" class="ui-state-default ui-corner-all" onclick="this.form.submit(); return false;">
<?= t("Done") ?>
</button>
<button id="g-upload-cancel-all" class="ui-state-default ui-corner-all" onclick="return true;">
<?= t("Cancel uploads") ?>
</button>
<span id="g-add-photos-status-message" />
