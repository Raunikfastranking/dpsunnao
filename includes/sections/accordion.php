<style>
    .icon-plus,
    .icon-minus {
        stroke: #fff;
        stroke-width: 2;
        stroke-linecap: round;
    }
</style>

<div class="mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">

    <!-- ACCORDION GROUP -->
    <div class="accordion space-y-3">

        <?php foreach ($data['resolved_content']['items'] as $items) { ?>

            <div class="bg-[#003618] rounded-[5px] shadow overflow-hidden">

                <!-- Header -->
                <button class="w-full flex items-center justify-between px-4 py-3 focus:outline-none heading-btn" aria-expanded="false">
                    <span class="font-medium text-white"><?= $items['title'] ?></span>

                    <svg class="w-6 h-6 transition-all duration-300">
                        <path class="icon-plus" d="M12 5v14M5 12h14"></path>
                        <path class="icon-minus hidden" d="M5 12h14"></path>
                    </svg>
                </button>

                <!-- Body -->
                <div class="px-4 overflow-hidden content bg-white" style="max-height:0; transition:max-height 300ms ease;">
                    <div class="py-3 text-gray-700 overflow-x-hidden">
                        <?= $items['content'] ?>
                    </div>
                </div>

            </div>

        <?php } ?>

    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accordions = document.querySelectorAll('.accordion');

        accordions.forEach(accordion => {
            const items = accordion.querySelectorAll('.heading-btn');

            // Close all items inside the current accordion
            function closeAll() {
                items.forEach(btn => {
                    btn.setAttribute('aria-expanded', 'false');
                    btn.nextElementSibling.style.maxHeight = '0';

                    const svg = btn.querySelector('svg');
                    svg.querySelector('.icon-plus').classList.remove('hidden');
                    svg.querySelector('.icon-minus').classList.add('hidden');
                });
            }

            items.forEach(btn => {
                const content = btn.nextElementSibling;

                btn.addEventListener('click', () => {
                    const expanded = btn.getAttribute('aria-expanded') === 'true';

                    if (expanded) {
                        // Closing current
                        btn.setAttribute('aria-expanded', 'false');
                        content.style.maxHeight = '0';

                        const svg = btn.querySelector('svg');
                        svg.querySelector('.icon-plus').classList.remove('hidden');
                        svg.querySelector('.icon-minus').classList.add('hidden');

                    } else {
                        // Open only this and close others
                        closeAll();
                        btn.setAttribute('aria-expanded', 'true');

                        // Smooth expand
                        setTimeout(() => {
                            content.style.maxHeight = content.scrollHeight + 'px';
                        }, 10);

                        const svg = btn.querySelector('svg');
                        svg.querySelector('.icon-plus').classList.add('hidden');
                        svg.querySelector('.icon-minus').classList.remove('hidden');
                    }
                });

                // Adjust height if content expands internally
                content.addEventListener('transitionend', () => {
                    if (btn.getAttribute('aria-expanded') === 'true') {
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                });
            });
        });
    });
</script>