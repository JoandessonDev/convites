<?php $__env->startSection('title', 'Gerador de Convites'); ?>

<?php $__env->startSection('content'); ?>
<div class="content flex flex-col px-8 gap-10 items-center">
    <img src="<?php echo e(asset('img/logo-frutificar.png')); ?>" alt="logo-frutificar" class=" w-4/5">
    <div class="flex flex-col gap-6 items-center">
        <label for="guestName" class="text-white text-2xl text-center font-semibold">
            DIGITE O NOME DO SEU CONVIDADO ABAIXO:
        </label>
        <input
            id="guestName"
            type="text"
            placeholder="Digite o primeiro nome"
            class="w-full p-2 rounded-lg text-gray-800">
        <button
            onclick="generateImage()"
            class="bg-teal-400 w-full p-2 text-white font-semibold rounded-tl-3xl rounded-br-3xl hover:bg-teal-500 transition-colors">
            GERAR CONVITE
        </button>
    </div>
</div>


<div
    id="modal_image"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-5 rounded-lg w-[400px] max-w-full mx-4 flex flex-col items-center">
        <div class="flex justify-between w-full mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Convite Pronto!</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                ✕
            </button>
        </div>
        <div id="invitePreview" class="mb-4">
            
            <img
                id="templateImg"
                src="<?php echo e(asset('img/modelo.png')); ?>"
                crossOrigin="anonymous"
                alt="template"
                class="absolute inset-0 w-full h-full object-cover rounded" />
            <p id="guestNameDisplay" class="w-full"></p>
        </div>
        <div class="flex gap-5">
            <button
                onclick="downloadImage()"
                class="bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-800 transition-colors">
                Baixar Convite
            </button>
            <a href="https://wa.me/"
                target="_blank"
                rel="noopener" class=" bg-teal-600 text-white px-4 py-2 rounded hover:bg-teal-800 transition-colors">
                <i class="fa-brands fa-whatsapp text-lg mr-2"></i>Compartilhar
            </a>
        </div>
    </div>
</div>

<style>
    #invitePreview {
        width: 360px;
        height: 640px;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
    }

    #guestNameDisplay {
        position: absolute;
        top: 44%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.35rem;
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        line-height: 1.2;
        text-align: center;
        color: white;
        white-space: pre-line;
        z-index: 10;
    }

    #templateImg {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
    }
</style>


<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    const guestName = document.getElementById('guestName').value.trim();

    function generateImage() {
        if (!guestName) {
            return alert('Por favor, digite um nome');
        }
        document.getElementById('guestNameDisplay').textContent = `Olá ${guestName}, tudo bem?`;
        document.getElementById('modal_image').classList.remove('hidden');
    }

    function downloadImage() {
        const element = document.getElementById('invitePreview');
        html2canvas(element, {
            scale: 2,
            useCORS: true
        }).then(canvas => {
            const link = document.createElement('a');
            link.download = `convite-${guestName}.png`;
            link.href = canvas.toDataURL('image/png', 1.0);
            link.click();
        });
    }

    function closeModal() {
        document.getElementById('modal_image').classList.add('hidden');
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\JOANDESSON\Desktop\convite\convite\resources\views/index.blade.php ENDPATH**/ ?>