Closoure là một hàm ẩn danh (lambda)(hàm ko có tên) nhưng có thêm chức năng sử dụng biến ngoài phạm vi dc tạo ra
  hàm ẩn danh có dạng function () use ($variableOutScope){ return "hello world"; }
```
function callFunc1(Closure $closure) {
$closure();
}

function callFunc2(Callable $callback) {
$callback();
}

function xy() {
echo 'Hello, World!';
}

callFunc1("xy"); // Catchable fatal error: Argument 1 passed to callFunc1() must be an instance of Closure, string given
callFunc2("xy"); // Hello, World!
```