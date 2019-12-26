<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://maseuropa.trunk.orbisbooking.com/owbooking/soap/reservas.php?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://maseuropa.trunk.orbisbooking.com/owbooking/soap/reservas.php?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Maseuropa\Booking\ClassMap::get(),
);
/**
 * Samples for Cancellationfees ServiceType
 */
$cancellationfees = new \Maseuropa\Booking\ServiceType\Cancellationfees($options);
/**
 * Sample call for cancellation_fees operation/method
 */
if ($cancellationfees->cancellation_fees(new \Maseuropa\Booking\StructType\Auth(), $result_id, $occupations) !== false) {
    print_r($cancellationfees->getResult());
} else {
    print_r($cancellationfees->getLastError());
}
/**
 * Samples for Cancellationrequest ServiceType
 */
$cancellationrequest = new \Maseuropa\Booking\ServiceType\Cancellationrequest($options);
/**
 * Sample call for cancellation_request operation/method
 */
if ($cancellationrequest->cancellation_request(new \Maseuropa\Booking\StructType\Auth(), $booking_id, $locator) !== false) {
    print_r($cancellationrequest->getResult());
} else {
    print_r($cancellationrequest->getLastError());
}
/**
 * Samples for Cancellationbooking ServiceType
 */
$cancellationbooking = new \Maseuropa\Booking\ServiceType\Cancellationbooking($options);
/**
 * Sample call for cancellation_booking operation/method
 */
if ($cancellationbooking->cancellation_booking(new \Maseuropa\Booking\StructType\Auth(), $booking_id, $locator, $confirm) !== false) {
    print_r($cancellationbooking->getResult());
} else {
    print_r($cancellationbooking->getLastError());
}
/**
 * Samples for Findnormal ServiceType
 */
$findnormal = new \Maseuropa\Booking\ServiceType\Findnormal($options);
/**
 * Sample call for find_normal operation/method
 */
if ($findnormal->find_normal(new \Maseuropa\Booking\StructType\Auth(), $entry_date, $nights, $article_class_type_id, $article_id, $central_visible, $article_superclass_type_id, $country_zone_id, $zone_id, $city, $province, $company_name, $supplier_id, $category, $board_supplement, $only_quotas, $only_offers, $occupations, $language_id, $no_description, $resident, $best_price_supplier) !== false) {
    print_r($findnormal->getResult());
} else {
    print_r($findnormal->getLastError());
}
/**
 * Samples for Findflights ServiceType
 */
$findflights = new \Maseuropa\Booking\ServiceType\Findflights($options);
/**
 * Sample call for find_flights operation/method
 */
if ($findflights->find_flights(new \Maseuropa\Booking\StructType\Auth(), $article_class_type_id, $type_flight, $origin_flight, $destiny_flight, $departure_date, $return_date, $flexible, $low_xml, $direct_flights, $cabin, $num_adults, $num_children, $age_children, $num_babies, $resident, $family_fare, $show_calendar) !== false) {
    print_r($findflights->getResult());
} else {
    print_r($findflights->getLastError());
}
/**
 * Samples for Findtransfers ServiceType
 */
$findtransfers = new \Maseuropa\Booking\ServiceType\Findtransfers($options);
/**
 * Sample call for find_transfers operation/method
 */
if ($findtransfers->find_transfers(new \Maseuropa\Booking\StructType\Auth(), $date, $article_class_type_id, new \Maseuropa\Booking\StructType\FAParamTransferPlace(), new \Maseuropa\Booking\StructType\FAParamTransferPlace(), $hour, $occupations) !== false) {
    print_r($findtransfers->getResult());
} else {
    print_r($findtransfers->getLastError());
}
/**
 * Samples for Formalizationbooking ServiceType
 */
$formalizationbooking = new \Maseuropa\Booking\ServiceType\Formalizationbooking($options);
/**
 * Sample call for formalization_booking operation/method
 */
if ($formalizationbooking->formalization_booking(new \Maseuropa\Booking\StructType\Auth(), $locator, $direct_payment_supplier, $air_external, $low_cost, $show_central, new \Maseuropa\Booking\StructType\FVParamChargeWS(), $reference_agency, $amadeus_issuance, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $notes, $confidential_information) !== false) {
    print_r($formalizationbooking->getResult());
} else {
    print_r($formalizationbooking->getLastError());
}
/**
 * Samples for Selectnormal ServiceType
 */
$selectnormal = new \Maseuropa\Booking\ServiceType\Selectnormal($options);
/**
 * Sample call for select_normal operation/method
 */
if ($selectnormal->select_normal(new \Maseuropa\Booking\StructType\Auth(), $result_id, $notes, $reference_agencyr, $locator, $warranty_cancellation, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $occupations, $booking_type_id, $supplier_notes, $ip_client, $supplier_id, $article_description, $id_idioma, $referer, $customer_notes, $agent_mail, $min_date, $max_date) !== false) {
    print_r($selectnormal->getResult());
} else {
    print_r($selectnormal->getLastError());
}
/**
 * Samples for Selecttransfer ServiceType
 */
$selecttransfer = new \Maseuropa\Booking\ServiceType\Selecttransfer($options);
/**
 * Sample call for select_transfer operation/method
 */
if ($selecttransfer->select_transfer(new \Maseuropa\Booking\StructType\Auth(), $notes, $reference_agency, $locator, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $occupations, $ip_client) !== false) {
    print_r($selecttransfer->getResult());
} else {
    print_r($selecttransfer->getLastError());
}
/**
 * Samples for Selectflight ServiceType
 */
$selectflight = new \Maseuropa\Booking\ServiceType\Selectflight($options);
/**
 * Sample call for select_flight operation/method
 */
if ($selectflight->select_flight(new \Maseuropa\Booking\StructType\Auth(), $notes, $occupations, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $reference_agency, $residente, $ip_client) !== false) {
    print_r($selectflight->getResult());
} else {
    print_r($selectflight->getLastError());
}
/**
 * Samples for Findinsurances ServiceType
 */
$findinsurances = new \Maseuropa\Booking\ServiceType\Findinsurances($options);
/**
 * Sample call for find_insurances operation/method
 */
if ($findinsurances->find_insurances(new \Maseuropa\Booking\StructType\Auth(), $locator) !== false) {
    print_r($findinsurances->getResult());
} else {
    print_r($findinsurances->getLastError());
}
/**
 * Samples for Findtrain ServiceType
 */
$findtrain = new \Maseuropa\Booking\ServiceType\Findtrain($options);
/**
 * Sample call for find_train operation/method
 */
if ($findtrain->find_train(new \Maseuropa\Booking\StructType\Auth(), $article_class_type_id, $origin, $destiny, $date_from, $date_to) !== false) {
    print_r($findtrain->getResult());
} else {
    print_r($findtrain->getLastError());
}
/**
 * Samples for Getpricetrain ServiceType
 */
$getpricetrain = new \Maseuropa\Booking\ServiceType\Getpricetrain($options);
/**
 * Sample call for get_price_train operation/method
 */
if ($getpricetrain->get_price_train(new \Maseuropa\Booking\StructType\Auth(), $search_id, $result_from_id, $result_to_id, $fares_paxes) !== false) {
    print_r($getpricetrain->getResult());
} else {
    print_r($getpricetrain->getLastError());
}
/**
 * Samples for Selecttrain ServiceType
 */
$selecttrain = new \Maseuropa\Booking\ServiceType\Selecttrain($options);
/**
 * Sample call for select_train operation/method
 */
if ($selecttrain->select_train(new \Maseuropa\Booking\StructType\Auth(), new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $search_id, $result_from_id, $result_to_id, $paxes, $price, $notes) !== false) {
    print_r($selecttrain->getResult());
} else {
    print_r($selecttrain->getLastError());
}
/**
 * Samples for Selectrentacar ServiceType
 */
$selectrentacar = new \Maseuropa\Booking\ServiceType\Selectrentacar($options);
/**
 * Sample call for select_rentacar operation/method
 */
if ($selectrentacar->select_rentacar(new \Maseuropa\Booking\StructType\Auth(), new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $reference_agency, $locator, $article_class_type_id, $article_id, $origin, $origin_date, $origin_hour, $origin_supplier_id, $destiny, $destiny_date, $destiny_hour, $destiny_supplier_id, $paxes, $supplements, $price, $notes) !== false) {
    print_r($selectrentacar->getResult());
} else {
    print_r($selectrentacar->getLastError());
}
/**
 * Samples for Findpdc ServiceType
 */
$findpdc = new \Maseuropa\Booking\ServiceType\Findpdc($options);
/**
 * Sample call for find_pdc operation/method
 */
if ($findpdc->find_pdc(new \Maseuropa\Booking\StructType\Auth(), $id_tipo_articulo_clase, new \Maseuropa\Booking\StructType\FAParamPDCHotel(), new \Maseuropa\Booking\StructType\FAParamPDCFlight(), $language_id, $entry_date, $exit_date, $occupations, $form_fields) !== false) {
    print_r($findpdc->getResult());
} else {
    print_r($findpdc->getLastError());
}
/**
 * Samples for Selectpdc ServiceType
 */
$selectpdc = new \Maseuropa\Booking\ServiceType\Selectpdc($options);
/**
 * Sample call for select_pdc operation/method
 */
if ($selectpdc->select_pdc(new \Maseuropa\Booking\StructType\Auth(), $id_tipo_articulo_clase, $notes, $reference_agency, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $paxes, $price, $threads, $ip_client) !== false) {
    print_r($selectpdc->getResult());
} else {
    print_r($selectpdc->getLastError());
}
/**
 * Samples for Cancellationfeepdc ServiceType
 */
$cancellationfeepdc = new \Maseuropa\Booking\ServiceType\Cancellationfeepdc($options);
/**
 * Sample call for cancellation_fee_pdc operation/method
 */
if ($cancellationfeepdc->cancellation_fee_pdc(new \Maseuropa\Booking\StructType\Auth(), $id_tipo_articulo_clase, $threads) !== false) {
    print_r($cancellationfeepdc->getResult());
} else {
    print_r($cancellationfeepdc->getLastError());
}
/**
 * Samples for Findboat ServiceType
 */
$findboat = new \Maseuropa\Booking\ServiceType\Findboat($options);
/**
 * Sample call for find_boat operation/method
 */
if ($findboat->find_boat(new \Maseuropa\Booking\StructType\Auth(), $article_class_type_id, $country_zone_id, $zone_id, $date, $num_days, $id_boat, $num_cabin, $num_cabin_min, $num_cabin_max, $constr_year, $constr_year_min, $constr_year_max, $boat_type, $crew, $long_min, $long_max, new \Maseuropa\Booking\StructType\FAParamOccupationBoatWS(), $cabin) !== false) {
    print_r($findboat->getResult());
} else {
    print_r($findboat->getLastError());
}
/**
 * Samples for Findrentacar ServiceType
 */
$findrentacar = new \Maseuropa\Booking\ServiceType\Findrentacar($options);
/**
 * Sample call for find_rentacar operation/method
 */
if ($findrentacar->find_rentacar(new \Maseuropa\Booking\StructType\Auth(), $article_class_type_id, $origin, $origin_date, $origin_hour, $destiny, $destiny_date, $destiny_hour) !== false) {
    print_r($findrentacar->getResult());
} else {
    print_r($findrentacar->getLastError());
}
/**
 * Samples for Selectboat ServiceType
 */
$selectboat = new \Maseuropa\Booking\ServiceType\Selectboat($options);
/**
 * Sample call for select_boat operation/method
 */
if ($selectboat->select_boat(new \Maseuropa\Booking\StructType\Auth(), $id_tipo_articulo_clase, $notes, $reference_agency, new \Maseuropa\Booking\StructType\SAParamB2CDataWSDO(), $paxes, $price, $key_results, $ip_client) !== false) {
    print_r($selectboat->getResult());
} else {
    print_r($selectboat->getLastError());
}
