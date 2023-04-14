<?php
 use Selective\XmlDSig\Algorithm;
 use Selective\XmlDSig\CryptoSigner;
 use Selective\XmlDSig\PrivateKeyStore;

 require_once("vendor/selective/xmldsig/src/PrivateKeyStore.php");
 use Selective\XmlDSig\XmlSigner;
 use Selective\XmlDSig\CryptoVerifier;
 use Selective\XmlDSig\XmlSignatureVerifier;
 //use DOMDocument;
// use DOMXPath;

 // Load the XML content you want to sign
 /*$xml = new DOMDocument();
 $xml->preserveWhiteSpace = true;
 $xml->formatOutput = false;
 $xml->loadXML($data); //archivo xml
*/
 
 // Create a XPATH query to select the element you want to sign 
 //$xpath = new DOMXPath($xml);
 
 // Change this query according to your requirements
 /*
 $referenceUri = '#1';
 $elementToSign = $xpath->query( '//*[@Id="'. $referenceUri .'"]' )->item(0);
 */
 // Add private key
$privateKeyStore = new PrivateKeyStore();
$privateKeyStore->loadFromPkcs12(file_get_contents('filename.p12'), 'password');
 
 $cryptoSigner = new CryptoSigner($privateKeyStore, new Algorithm(Algorithm::METHOD_SHA1));
 
 // Sign the element
 $xmlSigner = new XmlSigner($cryptoSigner);
 //$signedXml = $xmlSigner->signDocument($xml, $elementToSign);
$filename="archivo/factura.xml";
 $signedXml = $xmlSigner->signXml(file_get_contents($filename));




 //verificacion

 $cryptoVerifier = new CryptoVerifier($publicKeyStore);

 $xmlSignatureVerifier = new XmlSignatureVerifier($cryptoVerifier);


// or verify a XML file
$isValid = $xmlSignatureVerifier->verifyXml(file_get_contents('signed.xml'));


if ($isValid === true) {
    echo 'The XML signature is valid.';
} else {
    echo 'The XML signature is not valid.';
}

?>