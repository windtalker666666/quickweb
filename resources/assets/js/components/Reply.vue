<template>

<div :id="'reply-'+id" class="panel panel-default">

                <div class="panel-heading">

                    <div class="level">
                        <h5 class="flex">
                            <a :href="'/profiles/'+data.owner.name"
                                v-text="data.owner.name">
                             </a>
                                said {{ data.created_at }}...
                        </h5>
                   
                    

                    </div>
                </div>

                <div class="panel-body">
                    <div v-if="editing">  
                        <div class="form-group">
                            <textarea class="form-control" v-model="body"></textarea>                          
                        </div>

                        <button class="btn btn-xs btn-primary" @click="update">更新</button>
                        <button class="btn btn-xs btn-link" @click="editing = false">取消</button>
                        
                    </div>
                    <div v-else v-text="body">
                       
                    </div>
                   
                </div>

                <div class="panel-footer level">

                    <button class="btn btn-xs mr-1" @click="editing = true">编辑</button>
                    <button class="btn btn-xs btn-danger mr-1" @click="destroy">删除</button>

                </div>


                


</div>

</reply>
</template>


<script>

    import Favorite from './Favorite.vue';

    export default {
        props: ['data'],

        components:{Favorite},
        
        data(){
            return {
                editing: false,
                id: this.data.id,
                body: this.data.body
            };
        },

        methods: {
            update(){
                axios.patch('/replies/' + this.data.id, {
                    body: this.body
                });
                this.editing = false;
                flash('Updated!');
            },

            destroy(){
                axios.delete('/replies/' + this.data.id);

                this.$emit('deleted',this.data.id);

                //$(this.$el).fadeOut(1000,() => {
                //    flash('您的评论已经删除！');
                //});

                
            }
        }


    }
</script>
