## Filted Sanatize function
- #### Filter input function
- `filter_input()` function have three argunment.
- 1st argument `INPUT_POST` or `INPUT_GET` 
- 2nd argument is the name of the input.
- 3rd argunment `FILTER_SANITIZE_SPECIAL_CHARS` it is for removing special character.
- the code look like that `$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);`

