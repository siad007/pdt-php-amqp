<?php

class COMPersistHelper {

    public function __construct () {}

    public function GetCurFileName () {}

    public function SaveToFile () {}

    public function LoadFromFile () {}

    public function GetMaxStreamSize () {}

    public function InitNew () {}

    public function LoadFromStream () {}

    public function SaveToStream () {}
}

class com_exception extends Exception {

    protected $message;
    protected $code;
    protected $file;
    protected $line;

    public function __construct ($message, $code, $previous) {}

    final public function getMessage () {}

    final public function getCode () {}

    final public function getFile () {}

    final public function getLine () {}

    final public function getTrace () {}

    final public function getPrevious () {}

    final public function getTraceAsString () {}

    public function __toString () {}

}

class com_safearray_proxy {}

/**
 * VARIANT class.
 * The VARIANT is COM's equivalent of the PHP zval; it is a structure that can contain a value with a range of different possible types. The VARIANT class provided by the COM extension allows you to have more control over the way that PHP passes values to and from COM.
 * @link http://www.php.net/manual/en/class.variant.php
 * @since PHP 4 >= 4.1.0, PHP 5
 */
class variant {}

/**
 * The COM class.
 * The COM class allows you to instantiate an OLE compatible COM object and call its methods and access its properties.
 * @link http://www.php.net/manual/en/class.com.php
 * @since PHP 4 >= 4.1.0, PHP 5
 */
class com extends variant {}

/**
 * The DOTNET class.
 * The DOTNET class allows you to instantiate a class from a .Net assembly and call its methods and access its properties.
 * @link http://www.php.net/manual/en/class.dotnet.php
 * @since PHP 4 >= 4.1.0, PHP 5
 */
class dotnet extends variant {}

/**
 * Assigns a new value for a variant object.
 * Converts <code>value</code> to a variant and assigns it to the <code>variant</code> object; no new variant object is created, and the old value of <code>variant</code> is freed/released.
 * @link http://www.php.net/manual/en/function.variant-set.php
 * @since PHP 5
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @param mixed $value
 */
function variant_set($variant, $value) {}

/**
 * "Adds" two variant values together and returns the result.
 * Adds left to right using the following rules (taken from the MSDN library), which correspond to those of Visual Basic: <table>
 * <caption><strong>Variant Addition Rules</strong></caption>
 * <tr><th>If</th><th>Then</th></tr>
 * <tr><td>Both expressions are of the string type</td><td>Concatenation</td></tr>
 * <tr><td>One expression is a string type and the other a character</td><td>Addition</td></tr>
 * <tr><td>One expression is numeric and the other is a string</td><td>Addition</td></tr>
 * <tr><td>Both expressions are numeric</td><td>Addition</td></tr>
 * <tr><td>Either expression is NULL</td><td>NULL is returned</td></tr>
 * <tr><td>Both expressions are empty</td><td>Integer subtype is returned</td></tr>
 * </table>
 * @link http://www.php.net/manual/en/function.variant-add.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_add($left, $right) {}

/**
 * concatenates two variant values together and returns the result.
 * Concatenates left with right and returns the result.
 * This function is notionally equivalent to <code>$left . $right</code>.
 * <b>Note:</b><p>
 * As with all the variant arithmetic functions, the parameters for this function
 * can be either a PHP native type (integer, string, floating point, boolean
 * or NULL), or an instance of a COM, VARIANT or DOTNET class. PHP native types
 * will be converted to variants using the same rules as found in the constructor
 * for the VARIANT class. COM and DOTNET objects will have the value of their
 * default property taken and used as the variant value.</p>
 * <p>The variant arithmetic functions are wrappers around the similarly named
 * functions in the COM library; for more information on these functions,
 * consult the MSDN library. The PHP functions are named slightly differently;
 * for example variant_add() in PHP corresponds to VarAdd() in the MSDN documentation.</p>
 * @link http://www.php.net/manual/en/function.variant-cat.php
 * @since PHP 5
 * @see manual:variant_add()
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_cat($left, $right) {}

/**
 * Subtracts the value of the right variant from the left variant value.
 * Subtracts <code>right</code> from <code>left</code>.
 * <b>Note:</b><p>
 * As with all the variant arithmetic functions, the parameters for this function
 * can be either a PHP native type (integer, string, floating point, boolean
 * or NULL), or an instance of a COM, VARIANT or DOTNET class. PHP native types
 * will be converted to variants using the same rules as found in the constructor
 * for the VARIANT class. COM and DOTNET objects will have the value of their
 * default property taken and used as the variant value.</p>
 * <p>The variant arithmetic functions are wrappers around the similarly named
 * functions in the COM library; for more information on these functions,
 * consult the MSDN library. The PHP functions are named slightly differently;
 * for example variant_add() in PHP corresponds to VarAdd() in the MSDN documentation.</p>
 * @link http://www.php.net/manual/en/function.variant-sub.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_sub($left, $right) {}

/**
 * Multiplies the values of the two variants.
 * Multiplies <code>left</code> by <code>right</code>.
 * @link http://www.php.net/manual/en/function.variant-mul.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_mul($left, $right) {}

/**
 * Performs a bitwise AND operation between two variants.
 * Performs a bitwise AND operation. Note that this is slightly different from a regular AND operation.
 * @link http://www.php.net/manual/en/function.variant-and.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_and($left, $right) {}

/**
 * Returns the result from dividing two variants.
 * Divides <code>left</code> by <code>right</code> and returns the result.
 * @link http://www.php.net/manual/en/function.variant-div.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_div($left, $right) {}

/**
 * Performs a bitwise equivalence on two variants.
 * @link http://www.php.net/manual/en/function.variant-eqv.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * If each bit in <code>left</code> is equal to the corresponding bit in <code>right</code> then TRUE is returned, otherwise FALSE is returned.
 * </p>
 */
function variant_eqv($left, $right) {}

/**
 * Converts variants to integers and then returns the result from dividing them.
 * Converts <code>left</code> and <code>right</code> to integer values, and then performs integer division.
 * @link http://www.php.net/manual/en/function.variant-idiv.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_idiv($left, $right) {}

/**
 * Performs a bitwise implication on two variants.
 * Performs a bitwise implication operation.
 * @link http://www.php.net/manual/en/function.variant-imp.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_imp($left, $right) {}

/**
 * Divides two variants and returns only the remainder.
 * Divides <code>left</code> by <code>right</code> and returns the remainder.
 * @link http://www.php.net/manual/en/function.variant-mod.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_mod($left, $right) {}

/**
 * Performs a logical disjunction on two variants.
 * Performs a bitwise OR operation. Note that this is slightly different from a regular OR operation.
 * @link http://www.php.net/manual/en/function.variant-or.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_or($left, $right) {}

/**
 * Returns the result of performing the power function with two variants.
 * Returns the result of <code>left</code> to the power of <code>right</code>.
 * @link http://www.php.net/manual/en/function.variant-pow.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_pow($left, $right) {}

/**
 * Performs a logical exclusion on two variants.
 * @link http://www.php.net/manual/en/function.variant-xor.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed <p>
 * Returns the result.
 * </p>
 */
function variant_xor($left, $right) {}

/**
 * Returns the absolute value of a variant.
 * @link http://www.php.net/manual/en/function.variant-abs.php
 * @since PHP 5
 * @param mixed $val <p>
 * The variant.
 * </p>
 * @return mixed <p>
 * Returns the absolute value of val.
 * </p>
 */
function variant_abs($val) {}

/**
 * Returns the integer portion of a variant.
 * Gets the integer portion of a variant.
 * @link http://www.php.net/manual/en/function.variant-fix.php
 * @since PHP 5
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed <p>
 * If variant is negative, then the first negative integer greater than or equal to the variant is returned, otherwise returns the integer portion of the value of variant.
 * <p>
 */
function variant_fix($variant) {}

/**
 * Returns the integer portion of a variant.
 * Gets the integer portion of a variant.
 * @link http://www.php.net/manual/en/function.variant-fix.php
 * @since PHP 5
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed <p>
 * If variant is negative, then the first negative integer greater than or equal to the variant is returned, otherwise returns the integer portion of the value of variant.
 * <p>
 */
function variant_int($variant) {}

/**
 * Performs logical negation on a variant.
 * @link http://www.php.net/manual/en/function.variant-neg.php
 * @since PHP 5
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed <p>
 * Returns the result of the logical negation.
 * </p>
 */
function variant_neg($variant) {}

/**
 * Performs bitwise not negation on a variant.
 * @link http://www.php.net/manual/en/function.variant-not.php
 * @since PHP 5
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed <p>
 * Returns the bitwise not negation. If <code>variant</code> is NULL, the result will also be NULL.
 * </p>
 */
function variant_not($variant) {}

/**
 * Rounds a variant to the specified number of decimal places.
 * @link http://www.php.net/manual/en/function.variant-round.php
 * @since PHP 5
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @param integer $decimals <p>
 * Number of decimal places.
 * </p>
 * @return mixed <p>
 * Returns the rounded value.
 * </p>
 */
function variant_round($variant, $decimals) {}

/**
 * Compares two variants.
 * Compares <code>left</code> with <code>right</code>. This function will only compare scalar values, not arrays or variant records.
 * @link http://www.php.net/manual/en/function.variant-cmp.php
 * @since PHP 5
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @param int $lcid [optional] <p>
 * A valid Locale Identifier to use when comparing strings (this affects string collation).
 * </p>
 * @param int $flags [optional] <p>
 * flags can be one or more of the following values OR'd together, and affects string comparisons:<table>
 * <caption>Variant Comparision Flags</caption>
 * <tr><th><strong>value</strong></th><th><strong>meaning</strong></th></tr>
 * <tr><td>NORM_IGNORECASE</td><td>Compare case insensitively</td></tr>
 * <tr><td>NORM_IGNORENONSPACE</td><td>Ignore nonspacing characters</td></tr>
 * <tr><td>NORM_IGNORESYMBOLS</td><td>Ignore symbols</td></tr>
 * <tr><td>NORM_IGNOREWIDTH</td><td>Ignore string width</td></tr>
 * <tr><td>NORM_IGNOREKANATYPE</td><td>Ignore Kana type</td></tr>
 * <tr><td>NORM_IGNOREKASHIDA</td><td>Ignore Arabic kashida characters</td></tr></table>
 * @return int
 */
function variant_cmp($left, $right, $lcid = null, $flags = null) {}

/**
 * Converts a variant date/time value to Unix timestamp.
 * Converts variant from a <code>VT_DATE</code> (or similar) value into a Unix timestamp. This allows easier interopability between the Unix-ish parts of PHP and COM.
 * @link http://www.php.net/manual/en/function.variant-date-to-timestamp.php
 * @since PHP 5
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @return int <p>
 * Returns a unix timestamp.
 * </p>
 */
function variant_date_to_timestamp($variant) {}

/**
 * Returns a variant date representation of a Unix timestamp.
 * Converts <code>timestamp</code> from a unix timestamp value into a variant of
 * type VT_DATE. This allows easier interopability between the unix-ish parts of
 * PHP and COM.
 * @link http://www.php.net/manual/en/function.variant-date-from-timestamp.php
 * @since PHP 5
 * @param int $timestamp <p>
 * A unix timestamp.
 * </p>
 * @return variant <p>
 * Returns a VT_DATE variant.
 * </p>
 */
function variant_date_from_timestamp($timestamp) {}

/**
 * Returns the type of a variant object.
 * @link http://www.php.net/manual/en/function.variant-get-type.php
 * @since PHP 5
 * @param variant $variant <p>
 * The variant object.
 * </p>
 * @return integer <p>
 * This function returns an integer value that indicates the type of variant, which can be an instance of COM, DOTNET or VARIANT classes. The return value can be compared to one of the VT_XXX constants.</p>
 * <p>The return value for COM and DOTNET objects will usually be VT_DISPATCH; the only reason this function works for those classes is because COM and DOTNET are descendants of VARIANT.</p>
 * <p>In PHP versions prior to 5, you could obtain this information from instances of the VARIANT class ONLY, by reading a fake type property. See the VARIANT class for more information on this.</p>
 */
function variant_get_type($variant) {}

/**
 * Convert a variant into another type "in-place".
 * This function is similar to variant_cast() except that the variant is modified "in-place"; no new variant is created. The parameters for this function have identical meaning to those of variant_cast().
 * @link http://www.php.net/manual/en/function.variant-set-type.php
 * @since PHP 5
 * @param variant $variant <p>
 * The variant.
 * @param integer $type
 */
function variant_set_type($variant, $type) {}

/**
 * Convert a variant into a new variant object of another type.
 * This function makes a copy of variant and then performs a variant cast operation to force the copy to have the type given by type.
 * This function wraps VariantChangeType() in the COM library; consult MSDN for more information.
 * @link http://www.php.net/manual/en/function.variant-cast.php
 * @since PHP 5
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @param integer $type <p>
 * type should be one of the VT_XXX constants.
 * </p>
 * @return variant <p>
 * Returns a <code>VT_DATE</code> variant.
 * </p>
 */
function variant_cast($variant, $type) {}

/**
 * Generate a globally unique identifier (GUID).
 * A GUID is generated in the same way as DCE UUID's, except that the Microsoft convention is to enclose a GUID in curly braces.
 * @since PHP 5
 * @return string <p>
 * Returns the GUID as a string.
 * </p>
 */
function com_create_guid() {}

/**
 * Connect events from a COM object to a PHP object.
 * <p>Instructs COM to sink events generated by comobject into the PHP object <code>sinkobject</code>.</p>
 * <p>Be careful how you use this feature; if you are doing something similar to the example below,
 * then it doesn't really make sense to run it in a web server context.</p>
 * @link http://www.php.net/manual/en/function.com-event-sink.php
 * @since PHP 4 >= 4.2.0, PHP 5
 * @param variant $comobject
 * @param object $sinkobject <p>
 * <code>sinkobject</code> should be an instance of a class with methods named after those of the desired dispinterface;
 * you may use <code>com_print_typeinfo()</code> to help generate a template class for this purpose.</p>
 * @param string $sinkinterface <p>
 * PHP will attempt to use the default dispinterface type specified by the typelibrary associated with comobject,
 * but you may override this choice by setting sinkinterface to the name of the dispinterface that you want to use.</p>
 * @return bool <p>
 * Returns TRUE on success or FALSE on failure.
 * </p>
 */
function com_event_sink($comobject, $sinkobject, $sinkinterface = null) {}

/**
 * @param unknown $comobject
 * @param string $dispinterface
 * @param string $wantsink
 */
function com_print_typeinfo($comobject, $dispinterface = null, $wantsink = null) {}

/**
 * Process COM messages, sleeping for up to timeoutms milliseconds.
 * @param string $timeoutms [optional] <p>
 * The timeout, in milliseconds.
 * If you do not specify a value for <code>timeoutms</code>, then <code>0</code> will be assumed. A <code>0</code> value means that no waiting will be performed; if there are messages pending they will be dispatched as before; if there are no messages pending, the function will return FALSE immediately without sleeping.
 * </p>
 * @return bool <p>
 * If a message or messages arrives before the timeout, they will be dispatched, and the function will return TRUE. If the timeout occurs and no messages were processed, the return value will be FALSE.
 * </p>
 */
function com_message_pump($timeoutms = null) {}

/**
 * @param unknown $typelib_name
 * @param string $case_insensitive
 */
function com_load_typelib($typelib_name, $case_insensitive = null) {}

/**
 * @param unknown $progid
 * @param string $code_page
 */
function com_get_active_object($progid, $code_page = null) {}

define ('CLSCTX_INPROC_SERVER', 1);
define ('CLSCTX_INPROC_HANDLER', 2);
define ('CLSCTX_LOCAL_SERVER', 4);
define ('CLSCTX_REMOTE_SERVER', 16);
define ('CLSCTX_SERVER', 21);
define ('CLSCTX_ALL', 23);
define ('VT_NULL', 1);
define ('VT_EMPTY', 0);
define ('VT_UI1', 17);
define ('VT_I1', 16);
define ('VT_UI2', 18);
define ('VT_I2', 2);
define ('VT_UI4', 19);
define ('VT_I4', 3);
define ('VT_R4', 4);
define ('VT_R8', 5);
define ('VT_BOOL', 11);
define ('VT_ERROR', 10);
define ('VT_CY', 6);
define ('VT_DATE', 7);
define ('VT_BSTR', 8);
define ('VT_DECIMAL', 14);
define ('VT_UNKNOWN', 13);
define ('VT_DISPATCH', 9);
define ('VT_VARIANT', 12);
define ('VT_INT', 22);
define ('VT_UINT', 23);
define ('VT_ARRAY', 8192);
define ('VT_BYREF', 16384);
define ('CP_ACP', 0);
define ('CP_MACCP', 2);
define ('CP_OEMCP', 1);
define ('CP_UTF7', 65000);
define ('CP_UTF8', 65001);
define ('CP_SYMBOL', 42);
define ('CP_THREAD_ACP', 3);
define ('VARCMP_LT', 0);
define ('VARCMP_EQ', 1);
define ('VARCMP_GT', 2);
define ('VARCMP_NULL', 3);
define ('NORM_IGNORECASE', 1);
define ('NORM_IGNORENONSPACE', 2);
define ('NORM_IGNORESYMBOLS', 4);
define ('NORM_IGNOREWIDTH', 131072);
define ('NORM_IGNOREKANATYPE', 65536);
define ('DISP_E_DIVBYZERO', -2147352558);
define ('DISP_E_OVERFLOW', -2147352566);
define ('DISP_E_BADINDEX', -2147352565);
define ('MK_E_UNAVAILABLE', -2147221021);