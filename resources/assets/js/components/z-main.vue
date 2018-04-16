<template>
    <Carousel v-model="carousel" loop style="width: 75%;margin-left: auto; margin-right: auto;">
        <CarouselItem>
            <div class="demo-carousel">
                <span style="width: 100%;">SHUPT!</span>
            </div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel">2</div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel">3</div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel">4</div>
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