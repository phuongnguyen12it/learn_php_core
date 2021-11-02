Reflect sẽ giúp check kiểu dữ liệu hay object iinject vào class nó có phải là kiểu phù hợn hay k
o
VD: nếu chỗ setAuthor('aaa') truyền vào kiều string, thì php sẽ báo lỗi, cái này là nhờ reflection ch

PHP là kiểu dynamic language (kiểu ngôn ngữ dữ liệu động, ko cần khai báo kiểu dữ liệ cho biến), vì lý do đó nên việc check kiểu dữ liệu đầu vào khi mà ko dc định nghĩa sẽ cần tới các các thành phần như là ReflectionClass
