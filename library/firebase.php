<?php
function fb_config() {
  static $cfg = null;
  if ($cfg === null) $cfg = require __DIR__ . '/../config.php';
  return $cfg;
}

function fb_url(string $path): string {
  $c = fb_config();
  $base = rtrim($c['FIREBASE_DB'], '/');
  $path = '/'.ltrim($path, '/');       // misal 'students'
  $qs   = '?auth=' . urlencode($c['FIREBASE_SECRET']);
  return "{$base}{$path}.json{$qs}";
}

function fb_request(string $method, string $path, $data=null) {
  $ch = curl_init(fb_url($path));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
  if ($data !== null) {
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  }
  $res = curl_exec($ch);
  if ($res === false) {
    $err = curl_error($ch);
    curl_close($ch);
    throw new Exception("cURL error: $err");
  }
  curl_close($ch);
  return json_decode($res, true);
}

function fb_get($path)    { return fb_request('GET',    $path); }
function fb_post($path,$d){ return fb_request('POST',   $path,$d); }
function fb_put($path,$d) { return fb_request('PUT',    $path,$d); }
function fb_patch($path,$d){return fb_request('PATCH',  $path,$d); }
function fb_delete($path) { return fb_request('DELETE', $path); }
