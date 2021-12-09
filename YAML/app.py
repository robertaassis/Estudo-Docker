import yaml

if __name__=='__main__':
    stream = open("test.yaml","r")
    dictionary = yaml.safe_load(stream)

    for key, value in dictionary.items():
        print(key + " : "+ str(value))


# nome : Matheus
# idade : 30
# objeto : {'versao': 2, 'arquivo': 'teste.txt'}