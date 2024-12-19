```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $result[$key] = processData($value); // Recursive call
    } else if (is_string($value)) {
      $result[$key] = str_replace('@', '', $value); // Remove '@' character
    } else {
      $result[$key] = $value; // Handle other data types
    }
  }
  return $result;
}

$data = ['a' => 'abc@', 'b' => ['c' => 'def@', 'd' => 'ghi']];
$result = processData($data);
print_r($result);
```