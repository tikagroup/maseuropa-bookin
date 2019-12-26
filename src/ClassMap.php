<?php

namespace Maseuropa\Booking;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Auth' => '\\Maseuropa\\Booking\\StructType\\Auth',
            'CFParamOccupationWS' => '\\Maseuropa\\Booking\\StructType\\CFParamOccupationWS',
            'CFDefinitionCancellationCostWSDO' => '\\Maseuropa\\Booking\\StructType\\CFDefinitionCancellationCostWSDO',
            'BD_PaxWSDO' => '\\Maseuropa\\Booking\\StructType\\BD_PaxWSDO',
            'BD_SuplementWSDO' => '\\Maseuropa\\Booking\\StructType\\BD_SuplementWSDO',
            'BD_OfferWSDO' => '\\Maseuropa\\Booking\\StructType\\BD_OfferWSDO',
            'BD_ServiceNormalWSDO' => '\\Maseuropa\\Booking\\StructType\\BD_ServiceNormalWSDO',
            'BD_VoucherWSDO' => '\\Maseuropa\\Booking\\StructType\\BD_VoucherWSDO',
            'CancellationWSDO' => '\\Maseuropa\\Booking\\StructType\\CancellationWSDO',
            'FAParamOccupationWS' => '\\Maseuropa\\Booking\\StructType\\FAParamOccupationWS',
            'FASupplementWSDO' => '\\Maseuropa\\Booking\\StructType\\FASupplementWSDO',
            'FAOfferWSDO' => '\\Maseuropa\\Booking\\StructType\\FAOfferWSDO',
            'FACancellationFeeWSDO' => '\\Maseuropa\\Booking\\StructType\\FACancellationFeeWSDO',
            'FAPickupPointWSDO' => '\\Maseuropa\\Booking\\StructType\\FAPickupPointWSDO',
            'FAValuedArticleWSDO' => '\\Maseuropa\\Booking\\StructType\\FAValuedArticleWSDO',
            'FARetvalFindNormalWSDO' => '\\Maseuropa\\Booking\\StructType\\FARetvalFindNormalWSDO',
            'FARetvalFindFlightWSDO' => '\\Maseuropa\\Booking\\StructType\\FARetvalFindFlightWSDO',
            'FAParamTransferPlace' => '\\Maseuropa\\Booking\\StructType\\FAParamTransferPlace',
            'FAValuedArticleTransferWSDO' => '\\Maseuropa\\Booking\\StructType\\FAValuedArticleTransferWSDO',
            'FVParamChargeWS' => '\\Maseuropa\\Booking\\StructType\\FVParamChargeWS',
            'SAParamB2CDataWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamB2CDataWSDO',
            'ResultFormalizationBooking' => '\\Maseuropa\\Booking\\StructType\\ResultFormalizationBooking',
            'SAParamSupplement' => '\\Maseuropa\\Booking\\StructType\\SAParamSupplement',
            'SAParamPaxWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamPaxWSDO',
            'SAShippingAddressWSDO' => '\\Maseuropa\\Booking\\StructType\\SAShippingAddressWSDO',
            'SAParamOccupationsDataWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamOccupationsDataWSDO',
            'SACancellationFeeWSDO' => '\\Maseuropa\\Booking\\StructType\\SACancellationFeeWSDO',
            'SARetvalSelectNormalWSDO' => '\\Maseuropa\\Booking\\StructType\\SARetvalSelectNormalWSDO',
            'SAParamOccupationsTransferDataWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamOccupationsTransferDataWSDO',
            'SAParamOccupationsFlightDataWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamOccupationsFlightDataWSDO',
            'SARetvalSelectFlightWSDO' => '\\Maseuropa\\Booking\\StructType\\SARetvalSelectFlightWSDO',
            'FaresPax' => '\\Maseuropa\\Booking\\StructType\\FaresPax',
            'SAParamPaxTrain' => '\\Maseuropa\\Booking\\StructType\\SAParamPaxTrain',
            'SAParamPaxRentacar' => '\\Maseuropa\\Booking\\StructType\\SAParamPaxRentacar',
            'FAParamPDCHotel' => '\\Maseuropa\\Booking\\StructType\\FAParamPDCHotel',
            'FAParamPDCFlight' => '\\Maseuropa\\Booking\\StructType\\FAParamPDCFlight',
            'FAParamFormFields' => '\\Maseuropa\\Booking\\StructType\\FAParamFormFields',
            'FAPDCHeader' => '\\Maseuropa\\Booking\\StructType\\FAPDCHeader',
            'FAThread' => '\\Maseuropa\\Booking\\StructType\\FAThread',
            'FARetvalFindPackageWSDO' => '\\Maseuropa\\Booking\\StructType\\FARetvalFindPackageWSDO',
            'SAParamThreadsWSDO' => '\\Maseuropa\\Booking\\StructType\\SAParamThreadsWSDO',
            'SAServicePDC' => '\\Maseuropa\\Booking\\StructType\\SAServicePDC',
            'SARetvalSelectPDCWSDO' => '\\Maseuropa\\Booking\\StructType\\SARetvalSelectPDCWSDO',
            'SARetvalCancellationFee' => '\\Maseuropa\\Booking\\StructType\\SARetvalCancellationFee',
            'FAParamOccupationBoatWS' => '\\Maseuropa\\Booking\\StructType\\FAParamOccupationBoatWS',
            'FAParamCabinWS' => '\\Maseuropa\\Booking\\StructType\\FAParamCabinWS',
            'FAExtraWSDO' => '\\Maseuropa\\Booking\\StructType\\FAExtraWSDO',
            'FAValuedBoatWSDO' => '\\Maseuropa\\Booking\\StructType\\FAValuedBoatWSDO',
            'FARetvalFindBoatWSDO' => '\\Maseuropa\\Booking\\StructType\\FARetvalFindBoatWSDO',
            'FAValuedArticleRentacarWSDO' => '\\Maseuropa\\Booking\\StructType\\FAValuedArticleRentacarWSDO',
            'FARetvalFindRentacarWSDO' => '\\Maseuropa\\Booking\\StructType\\FARetvalFindRentacarWSDO',
            'SARetvalSelectBoatWSDO' => '\\Maseuropa\\Booking\\StructType\\SARetvalSelectBoatWSDO',
        );
    }
}
