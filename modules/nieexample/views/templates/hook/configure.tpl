{if $save}

    <p>Actualizado</p>

{/if}

<form method="post">
    <div class="form-group">
        <label for="urlExample">URL</label>
        <input type="text" class="form-control" value="{$urlValue}" name="urlExample" id="urlExample" aria-describedby="url" placeholder="URL">
        <small id="urlHelp" class="form-text text-muted">Introuzca una URL</small>
    </div>
    <button type="submit" name="submitButton" id="submitButton" class="btn btn-primary">Submit</button>
</form>