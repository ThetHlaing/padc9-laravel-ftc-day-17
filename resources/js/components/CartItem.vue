<template>
    <div class="row" style="margin-top:10px;">
            <div class="col-3">
                <img :src="image_url" style="width:100px"/>
            </div>            
            <div class="col-6">
                <slot></slot>
            </div>
        </div>       
</template>
<script>
export default {
    props : ['image_url']
}
</script>