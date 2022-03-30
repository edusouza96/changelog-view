# Pacote para gerar link de visualização do seu changelog

## Passo a passo

- Instale o pacote utilizando o comando abaixo
```sh
composer require edusouza96/changelog-view
```

- Registre o provider em app\config.php na variavel providers

```php
    ChangelogView\ServiceProvider::class
```

- Tenha um arquivo com este nome 'CHANGE_LOG.txt', seguindo este padrão
```txt
1.1
0002 - 02/01/2022 - Tarefa B

1.0
0001 - 01/01/2022 - Tarefa A
```

- Acessar no navegador. Exemplo localhost: http://localhost:8000/v1/sobre/changelog