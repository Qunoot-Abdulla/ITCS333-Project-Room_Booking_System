document.getElementById('generalSettingsForm').onsubmit = function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    formData.append('update_general', true);

    fetch('ajax/settings_crud.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        if (data === 'success') {
            alert('Settings updated successfully!');
            location.reload();
        } else {
            alert('Failed to update settings!');
        }
    });
};

function toggleShutdown(checkbox) {
    const formData = new FormData();
    formData.append('toggle_shutdown', true);
    formData.append('shutdown_mode', checkbox.checked ? 1 : 0);

    fetch('ajax/settings_crud.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        if (data !== 'success') {
            alert('Failed to update shutdown mode!');
            checkbox.checked = !checkbox.checked; // revert on failure
        }
    });
}
