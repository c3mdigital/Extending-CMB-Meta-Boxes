Extending-CMB-Meta-Boxes
========================
###A code repository and collection of extended field types created for CMB Meta Boxes and Fields

 - The goal of this repository is to serve as an additional resource for the [CMB Meta Boxes and Fields](https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress.git) library.

 - Anyone is encouraged to send a pull request adding any additional field types created.
 - Please follow the submission guidelines below so that the entire collection of extra fields can be added to the library by including the master file which contains the includes for all the additional fields.


###Instructions for use
- Add the master file and lib folder to the same directory your CMB Meta Boxes init file resides
- Include the master file by adding `require_once( 'extensions.php' )` to your function that checks `if (!class_exists( 'cmb_Meta_Box' )`

###Instructions for submitting your field typs
- Clone or check out the repository create a new file in the lib directory using the nameing convention `cmb_{field-type}.php`
- Add your render and validation (if needed) functions to the file.
- See [Adding your own field types](https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress/wiki/Adding-your-own-field-types) for instructions on how to add a field type.
- Please use [WordPress Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards) whenever possible
- Please add PhpDOC inline documentation to your functions


