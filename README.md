
# COMPONENTE COM_FOOS

Component com_foos for testing new funcionality in Joomla 4.2: 

* Multiple Models attached to a View.

To test the funcionality apply the path, and install the component com_foos as usual.

## Backend

If you pick in the Component > COM_FOOS menu link, you will see:

```
Hello Foo from the model: DEFAULT
Hello FOOS from the ADMINISTRATOR model: SECOND
Hello FOOS from the ADMINISTRATOR model: THIRD
```

Each one of this messages, comming from a different model attached to the Foos View.

## Frontend

If you create a menu link for the component as usual, you will see:

```
Hello FOO from the SITE model: DEFAULT
Hello FOO from the SITE model: SECOND
Hello FOOS from the ADMINISTRATOR model: THIRD
```
Each one of this messages, comming from a different model attached to the Foo View.

Note that the THIRD model is a backend model.