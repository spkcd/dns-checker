document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const loadingSpinner = document.querySelector('.loading-spinner');

    if (form) {
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            loadingSpinner.style.display = 'block';
            
            const domain = form.querySelector('input[name="domain"]').value;
            try {
                const response = await fetch('api/dns-lookup.php', {
                    method: 'POST',
                    body: JSON.stringify({ domain: domain }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });
                const data = await response.json();
                updateTable(data);
            } catch (error) {
                console.error('Error:', error);
            } finally {
                loadingSpinner.style.display = 'none';
            }
        });
    }
});
