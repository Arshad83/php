
<?php $action=MM::redirect_url();?>
<?php
//echo '<form action="'.$action.'" method="POST">
echo '<form method="POST">
<LABEL>fIRST NAME</LABEL>
<input type="text" name="name" value="">
<input type="submit" name="submit">
</form>';
?>

<?php
class MM
{
    public static function value()
    {
        echo "using class=".$_POST['name'];
    }
    public static function redirect_url()
    {
        //return "ab";
       // header("location: http://www.google.com/");
    }
}
MM::value();
