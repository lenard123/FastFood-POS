<template>
    <div class="flex p-4 mb-2" :class="alert_background" v-if="!hidden">
      <div class="flex justify-between w-full">
        <div :class="alert_text">
          <p class="mb-2 font-bold">
            {{ title }}
          </p>
          <p class="text-xs">
            <slot/>
          </p>
        </div>
        <div class="text-sm text-gray-500" v-on:click="hidden=true">
           <p>x</p>
        </div>
      </div>
    </div>
</template>
<script>
export default{
	data: function() {
		return {
			hidden:false,
			alert_type:{
				'success': {
					'background' : 'bg-green-200',
					'color': 'text-green-600'
				},
				'info':{
					'background' : 'bg-blue-200',
					'color': 'text-blue-600'
				},
				'warning':{
					'background' : 'bg-yellow-200',
					'color': 'text-yellow-600'
				},
				'danger':{
					'background' : 'bg-red-200',
					'color': 'text-red-600'
				}
			}
		}
	},
	props: {
		title:null,
		type: {
			default: 'info'
		}
	},

	computed: {
		alert_background: function() {
			return this.alert_type[this.$props.type].background
		},

		alert_text: function() {
			return this.alert_type[this.$props.type].color
		}
	}
}
</script>