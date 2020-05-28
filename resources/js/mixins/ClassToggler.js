
export default {


data() {

	return{
			isActive: false,
			isDropDown: false,
		}
	},

	methods: {

    addActiveClass() {
      this.isActive = !this.isActive;
    },

    openDropDown() {
      this.isDropDown = !this.isDropDown;
    },

  },

}