<?php

/**
 * cURL erabiliz GET eskaera bat bidaltzeko funtzioa
 * 
 * @param string $url API-ren helbidea
 */
function GetRequest(string $url): mixed
{

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);

    if (!$response) {
        return "Error:" . curl_error($ch);
    }

    curl_close($ch);

    return json_decode($response);

}

/**
 * cURL erabiliz POST eskaera bat bidaltzeko funtzioa
 * 
 * @param array $data API-ra bidai nahi den datuak
 * @param string $url API-ren helbidea
 */
function PostRequest(array $data, string $url): mixed
{
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);

    if (!$response) {
        return "Error:" . curl_error($ch);
    }

    curl_close($ch);
    return $response;

}

/**
 * cURL erabiliz PUT eskaera bat bidaltzeko funtzioa
 * 
 * @param array $data API-ra bidai nahi den datuak
 * @param string $url API-ren helbidea
 */
function PutRequest(array $data, string $url): mixed
{
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);

    if (!$response) {
        return "Error:" . curl_error($ch);

    }

    curl_close($ch);

    return $response;
}

/**
 * cURL erabiliz DELETE eskaera bat bidaltzeko funtzioa
 * 
 * @param string $url API-ren helbidea
 */
function DeleteRequest(string $url): mixed
{

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);

    if (!$response) {
        return "Error:" . curl_error($ch);
    }

    curl_close($ch);
    return $response;

}