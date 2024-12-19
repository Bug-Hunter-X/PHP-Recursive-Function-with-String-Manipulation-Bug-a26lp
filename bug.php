```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, '@') !== false) {
      $data[$key] = str_replace('@', '', $value); // Remove '@' character
    }
  }
  return $data;
}

$data = ['a' => 'abc@', 'b' => ['c' => 'def@', 'd' => 'ghi']];
$result = processData($data);
print_r($result);
```