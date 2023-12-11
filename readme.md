## Filted Sanatize function
- #### Filter input function
- `filter_input()` function have three argunment.
- 1st argument `INPUT_POST` or `INPUT_GET` 
- 2nd argument is the name of the input.
- 3rd argunment `FILTER_SANITIZE_SPECIAL_CHARS` it is for removing special character.
- the code look like that `$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);`
- <b>remember </b> 3rd argument have lot of a lot of type of filter, we only use what we need we need </br>
we can use <b>number filter</b>, <b> email filter </b> etc.
