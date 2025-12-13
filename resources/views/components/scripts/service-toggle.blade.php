<script>
document.addEventListener('DOMContentLoaded', () => {
    const type = document.getElementById('service_type');
    if (!type) return;

    const forms = [
        'form-cetak-dokumen',
        'form-cetak-foto',
        'form-pengetikan'
    ];

    type.addEventListener('change', function () {
        forms.forEach(id => document.getElementById(id)?.classList.add('hidden'));

        const target = document.getElementById(`form-${this.value}`);
        if (target) target.classList.remove('hidden');
    });
});
</script>
