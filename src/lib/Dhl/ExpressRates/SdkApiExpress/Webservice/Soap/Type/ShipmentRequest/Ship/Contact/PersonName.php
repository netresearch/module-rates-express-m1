<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Ship\Contact;

use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The person name type.
 *
 * @api
 * @package  Dhl\Express\Api
 * @link     https://www.netresearch.de/
 */
class PersonName extends AlphaNumeric
{
    const MAX_LENGTH = 45;
}
