Extending-CMB-Meta-Boxes
========================
###A code repository and collection of extended field types created for CMB Meta Boxes and Fields

 - The goal of this repository is to serve as an additional resource for the [CMB Meta Boxes and Fields](https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress.git) library.

 - Anyone is encouraged to send a pull request adding any additional field types created.
 - Please follow the submission guidelines below so that the entire collection of extra fields can be added to the library by including the master file which contains the includes for all the additional fields.


###Instructions for use
- Add the master file and lib folder to the same directory your CMB Meta Boxes init file resides
- Include the master file by adding `require_once( 'extensions.php' )` You can put the include at the bottom of your metabox functions.  It includes init.php only if the class doesn't already excist to avoid conflicts.

###Instructions for submitting your field typs
- Clone or check out the repository create a new file in the lib directory using the nameing convention `{field-type}.php`
- Add your render and validation (if needed) functions to the file.
- See [Adding your own field types](https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Adding-your-own-field-types) for instructions on how to add a field type.
- Name your render function `{field_type}` This should be the same as the file name without the .php (The initialization file adds prefixes when it renders)
- Name your validate function `validate_{field_type}`
- Add your field type to the `$extensions array();` to cmb_metabox_extensions.php and submit a pull request. 
- The filters and actions will be added by the initialization file in one array using the name of the extension in the file name.
- Please use [WordPress Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards) whenever possible
- Please add PhpDOC inline documentation to your functions


