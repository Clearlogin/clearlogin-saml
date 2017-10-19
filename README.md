moodle_clearlogin-saml
===============

SAML plugin for Moodle to use with Clearlogin SSO
This document assumes that moodle is already created in clearlogin, for help with that please visit clearlogin.com.


##Installation Instructions
###### Note if you are choosing to install via the Moodle plugins directory than skip step 1.
####1. Download
  * [Latest](https://github.com/Clearlogin/moodle_clearlogin-saml/blob/master/clearlogin_saml.zip)

####2. Install (MARKETPLACE)
  1. (Not Available ATM)

####2. Install (DOWNLOAD)
  1. Navigate to your moodle plugin install directory. Usually found in:
   moodle.yourschool.com/admin/tool/installaddon/index.php
  2. Select Auth plugin type
  3. Select choose a file & upload the downloaded zip file.
  4. Agree to the TOS
  5. Click `Install the plugin from the ZIP file`
  6. After the check passes click `Install Plugin`
  7. Click `Upgrade moodle database now`

####3. Configure
  1. Navigate to your Authentication Management page. Usually found in:
    moodle.yourschool.com/admin/settings.php?section=manageauths
  2. Enable it via the eye icon.
  3. Click settings.
  4. Enter the idP entity id usually `yourdomain.clearlogin.com`
  5. Enter the `Single Sign On Service Url` usually `yourdomain.clearlogin.com/apps/moodle/login`
  6. (Optional) Enter the `Single Log Out Service Url` usually `yourdomain.clearlogin.com/apps/logout`
  7. Copy and paste the Public Cert found in your admin console at admin.clearlogin.com/apps and click on moodle.
  8. (Optional) Turn on `Create user if not exists`
  9. (Optional) Turn on `Update user data`
  10. Make sure `Match Moodle account by` is set to `email`
  11. Scroll to `ATTRIBUTE MAPPING`
  12. Map `Username` to `username`
  13. Map `Email Address` to `email`
  14. Map `First Name` to `first_name`
  15. Map `Last Name` to `last_name`
  16. (Optional) You may want to map {{LDAP.role}} or {{LDAP.ou}} to moodle roles.
  17. Click `Save Changes` and you are set!

####4. Fallback(Suggested)
  1. Open `/login/index.php`
  2. Edit the line that says `if (!empty($CFG->alternateloginurl)) {`
  3. Replace it with `if (!empty($CFG->alternateloginurl) && !isset($_GET['normal'])) {`
