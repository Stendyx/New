<h2>Редактор новостей</h2>
</br>

<?if (!empty($_GET[news])):
include ("/editor_form.php");

else :
include ("/functions/show_editor.php");
endif; ?>
</body>
</html>

