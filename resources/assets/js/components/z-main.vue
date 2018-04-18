<template>
    <Carousel v-model="carousel" loop style="width: 75%;margin-left: auto; margin-right: auto;" >
        <CarouselItem >
            <div class="demo-carousel">

            </div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel">

            </div>
        </CarouselItem>
    </Carousel>
</template>

<script>
    export default {
        name: "z-main",
        data() {
            return {
                carousel: '0'
            }
        },
    }
</script>

<style scoped>

</style>